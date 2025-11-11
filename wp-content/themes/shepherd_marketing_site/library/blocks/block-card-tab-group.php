<?php
add_action('acf/init', 'block_card_tab_group');
function block_card_tab_group() {
    if ( ! function_exists('acf_register_block') ) return;

    $icon = '<svg ...>...</svg>';

    acf_register_block(array(
        'name'              => 'card-tab-group',
        'title'             => __('Card Tab Group'),
        'description'       => __('Card Tab Group'),
        'render_template'   => 'block-parts/block-card-tab-group.php',
        'category'          => 'theme',
        'icon'              => $icon,
        'keywords'          => array('tabs','cards'),
        'mode'              => 'edit',

        // 👉 Key: turn off the Edit/Preview mode switcher
        'supports'          => array(
            'html'              => false,
            'align'             => false,
            'align_text'        => false,
            'align_content'     => false,
            'mode'              => true,   // <— hides the Edit/Preview toggle
            'multiple'          => true,
            'jsx'               => true,
            'anchor'            => true,
            'customClassName'   => true,
            'className'         => true,
        ),
    ));
}