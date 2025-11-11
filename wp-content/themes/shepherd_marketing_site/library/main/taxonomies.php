<?php
function add_faq_taxonomy() {
    register_taxonomy('faq_type', 'faq', array(
      'hierarchical' => true,
      'labels' => array(
        'name' => _x( 'FAQ Types', 'taxonomy general name' ),
        'singular_name' => _x( 'FAQ Types', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Types' ),
        'all_items' => __( 'All Types' ),
        'parent_item' => __( 'Parent Type' ),
        'parent_item_colon' => __( 'Parent Type:' ),
        'edit_item' => __( 'Edit Type' ),
        'update_item' => __( 'Update Type' ),
        'add_new_item' => __( 'Add New Type' ),
        'new_item_name' => __( 'New Type Name' ),
        'menu_name' => __( 'FAQ Types' ),
      ),
      // Control the slugs used for this taxonomy
      'rewrite' => array(
        'slug' => 'types',
        'with_front' => false,
        'hierarchical' => true
      ),
    ));
  }
  add_action( 'init', 'add_faq_taxonomy', 0 );

// 1) Add a "FAQ Type" column
add_filter('manage_faq_posts_columns', function ($cols) {
    $new = [];
    foreach ($cols as $key => $label) {
        $new[$key] = $label;
        if ($key === 'title') {
            $new['faq_type_col'] = __('FAQ Type', 'your-textdomain');
        }
    }
    return $new;
});

// 2) Render the column with links to filter by that term
add_action('manage_faq_posts_custom_column', function ($column, $post_id) {
    if ($column !== 'faq_type_col') return;

    $terms = get_the_terms($post_id, 'faq_type');
    if (is_wp_error($terms) || empty($terms)) {
        echo '<span class="na">—</span>';
        return;
    }

    $links = array_map(function ($t) {
        $url = add_query_arg([
            'post_type' => 'faq',
            'faq_type'  => $t->slug,
        ], admin_url('edit.php'));
        return sprintf('<a href="%s">%s</a>', esc_url($url), esc_html($t->name));
    }, $terms);

    echo implode(', ', $links);
}, 10, 2);

// 3) (Optional) Dropdown filter for faq_type on the FAQ list screen
add_action('restrict_manage_posts', function () {
    global $typenow;
    if ($typenow !== 'faq') return;

    $taxonomy = 'faq_type';
    $selected = isset($_GET[$taxonomy]) ? sanitize_text_field($_GET[$taxonomy]) : '';

    wp_dropdown_categories([
        'show_option_all' => __('All FAQ Types', 'your-textdomain'),
        'taxonomy'        => $taxonomy,
        'name'            => $taxonomy,
        'orderby'         => 'name',
        'selected'        => $selected,
        'hierarchical'    => true,
        'hide_empty'      => false,
        'value_field'     => 'slug',
    ]);
});

// 4) Make the dropdown actually filter the query
add_filter('parse_query', function ($query) {
    global $pagenow;
    if ($pagenow !== 'edit.php' || !isset($query->query_vars['post_type']) || $query->query_vars['post_type'] !== 'faq') {
        return;
    }
    if (!empty($_GET['faq_type'])) {
        $query->query_vars['tax_query'] = [[
            'taxonomy' => 'faq_type',
            'field'    => 'slug',
            'terms'    => sanitize_text_field($_GET['faq_type']),
        ]];
    }
});

// 5) (Optional) Make the column sortable by term name (first term)
add_filter('manage_edit-faq_sortable_columns', function ($cols) {
    $cols['faq_type_col'] = 'faq_type';
    return $cols;
});

add_action('pre_get_posts', function ($q) {
    if (!is_admin() || !$q->is_main_query()) return;
    if ($q->get('post_type') !== 'faq') return;

    if ($q->get('orderby') === 'faq_type') {
        // Join terms to sort by name
        add_filter('posts_join', function ($join) {
            global $wpdb;
            return $join . " LEFT JOIN {$wpdb->term_relationships} tr ON ({$wpdb->posts}.ID = tr.object_id)
                             LEFT JOIN {$wpdb->term_taxonomy} tt ON (tr.term_taxonomy_id = tt.term_taxonomy_id AND tt.taxonomy = 'faq_type')
                             LEFT JOIN {$wpdb->terms} t ON (tt.term_id = t.term_id)";
        });
        add_filter('posts_orderby', function ($orderby) {
            return 't.name ASC, ' . $orderby;
        });
        add_filter('posts_groupby', function ($groupby) {
            global $wpdb;
            return "{$wpdb->posts}.ID";
        });
    }
});
