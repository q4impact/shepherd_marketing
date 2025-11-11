<?php
function load_faqs() {
    $taxonomy = isset($_POST['taxonomy']) ? sanitize_key($_POST['taxonomy']) : 'faq_type';
    $term_id  = isset($_POST['term_id']) ? intval($_POST['term_id']) : 0;

    $per_page = isset($_POST['per_page']) ? intval($_POST['per_page']) : -1;

    $status_in = ['publish'];
    if (isset($_POST['status'])) {
        $status_raw = is_array($_POST['status']) ? $_POST['status'] : explode(',', (string) $_POST['status']);
        $status_in  = array_values(array_filter(array_map('sanitize_key', $status_raw)));
        if (!$status_in) $status_in = ['publish'];
    }

    $args = [
        'post_type'              => 'faq',
        'post_status'            => $status_in,
        'posts_per_page'         => $per_page,
        'orderby'                => ['menu_order' => 'ASC', 'title' => 'ASC'],
        'order'                  => 'ASC',
        'no_found_rows'          => true,
        'update_post_meta_cache' => false,
        'update_post_term_cache' => true,
        'suppress_filters'       => false,
        'fields'                 => 'ids',
    ];

    // If a single term_id is provided, limit to that term.
    $selected_term = null;
    if ($term_id > 0) {
        $selected_term = get_term($term_id, $taxonomy);
        if ($selected_term && !is_wp_error($selected_term)) {
            $args['tax_query'] = [[
                'taxonomy' => $taxonomy,
                'field'    => 'term_id', // or 'id'
                'terms'    => [$term_id],
            ]];
        } else {
            // Invalid term id → return empty result early
            wp_send_json_success([
                'taxonomy'       => $taxonomy,
                'selected_term'  => null,
                'total'          => 0,
                'groups'         => [],
            ], 200);
        }
    }

    $post_ids = get_posts($args);

    $groups = [];   // slug or "_none" => ['term'=>..., 'items'=>[]]
    $total  = 0;

    foreach ($post_ids as $id) {
        $total++;
        $title = get_the_title($id);
        $answer = function_exists('get_field') ? get_field('answer', $id) : '';
        $menu  = (int) get_post_field('menu_order', $id);

        // If a term was explicitly selected, we already know the bucket
        if ($selected_term) {
            $slug = $selected_term->slug;
            if (!isset($groups[$slug])) {
                $groups[$slug] = [
                    'term'  => [
                        'term_id' => (int) $selected_term->term_id,
                        'slug'    => $selected_term->slug,
                        'name'    => $selected_term->name,
                    ],
                    'items' => [],
                ];
            }
            $groups[$slug]['items'][] = [
                'id'         => (int) $id,
                'title'      => $title,
                'answer'     => $answer,
                'menu_order' => $menu,
            ];
            continue;
        }

        // No specific term: group by each term on the post, or _none if no terms
        $post_terms = taxonomy_exists($taxonomy) ? get_the_terms($id, $taxonomy) : false;

        if (!is_wp_error($post_terms) && !empty($post_terms)) {
            foreach ($post_terms as $t) {
                if (!isset($groups[$t->slug])) {
                    $groups[$t->slug] = [
                        'term'  => [
                            'term_id' => (int) $t->term_id,
                            'slug'    => $t->slug,
                            'name'    => $t->name,
                        ],
                        'items' => [],
                    ];
                }
                $groups[$t->slug]['items'][] = [
                    'id'         => (int) $id,
                    'title'      => $title,
                    'answer'     => $answer,
                    'menu_order' => $menu,
                ];
            }
        } else {
            if (!isset($groups['_none'])) {
                $groups['_none'] = [
                    'term'  => null, // or provide a label object
                    'items' => [],
                ];
            }
            $groups['_none']['items'][] = [
                'id'         => (int) $id,
                'title'      => $title,
                'answer'     => $answer,
                'menu_order' => $menu,
            ];
        }
    }

    // Sort items within each group
    foreach ($groups as &$g) {
        usort($g['items'], function ($A, $B) {
            if ($A['menu_order'] === $B['menu_order']) {
                return strcasecmp($A['title'], $B['title']);
            }
            return $A['menu_order'] <=> $B['menu_order'];
        });
    }
    unset($g);

    // Order groups (term name ASC), with _none last
    $group_list = [];
    $none_bucket = $groups['_none'] ?? null;
    if ($none_bucket) unset($groups['_none']);

    if ($selected_term) {
        // Single group only—already correct order
        $group_list = array_values($groups);
    } else {
        uasort($groups, function ($a, $b) {
            return strcasecmp($a['term']['name'] ?? '', $b['term']['name'] ?? '');
        });
        $group_list = array_values($groups);
        if ($none_bucket) $group_list[] = $none_bucket;
    }

    wp_send_json_success([
        'taxonomy'      => $taxonomy,
        'selected_term' => $selected_term ? [
            'term_id' => (int) $selected_term->term_id,
            'slug'    => $selected_term->slug,
            'name'    => $selected_term->name,
        ] : null,
        'total'   => $total,
        'groups'  => $group_list,
    ], 200);
}
add_action('wp_ajax_load_faqs', 'load_faqs');
add_action('wp_ajax_nopriv_load_faqs', 'load_faqs');