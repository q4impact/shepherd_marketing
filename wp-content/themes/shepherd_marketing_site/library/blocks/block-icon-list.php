<?php
add_action('acf/init', 'block_icon_list');
function block_icon_list() {
    if ( ! function_exists('acf_register_block') ) return;

    $icon = '<svg ...>...</svg>';

    acf_register_block(array(
        'name'              => 'icon-list',
        'title'             => __('Icon List'),
        'description'       => __('Icon List'),
        'render_template'   => 'block-parts/block-icon-list.php',
        'category'          => 'theme',
        'icon'              => $icon,
        'keywords'          => array('list','icon'),
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