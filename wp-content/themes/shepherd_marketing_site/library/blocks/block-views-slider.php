<?php
add_action('acf/init', 'block_views_slider');
function block_views_slider() {
    if ( ! function_exists('acf_register_block') ) return;

    $icon = '<svg ...>...</svg>';

    acf_register_block(array(
        'name'              => 'views-slider',
        'title'             => __('Views Slider'),
        'description'       => __('Views Slider'),
        'render_template'   => 'block-parts/block-views-slider.php',
        'category'          => 'theme',
        'icon'              => $icon,
        'keywords'          => array('views','slider'),
        'mode'              => 'edit',
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