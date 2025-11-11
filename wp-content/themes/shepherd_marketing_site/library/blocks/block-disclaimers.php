<?php
add_action('acf/init', 'block_disclaimers');
function block_disclaimers() {
    if ( ! function_exists('acf_register_block') ) return;

    $icon = '<svg ...>...</svg>';

    acf_register_block(array(
        'name'              => 'disclaimers',
        'title'             => __('Disclaimers'),
        'description'       => __('Disclaimers'),
        'render_template'   => 'block-parts/block-disclaimers.php',
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
            'mode'              => true,
            'multiple'          => true,
            'jsx'               => true,
            'anchor'            => true,
            'customClassName'   => true,
            'className'         => true,
        ),
    ));
}