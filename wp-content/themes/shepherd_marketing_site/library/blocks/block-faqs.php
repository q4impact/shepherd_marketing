<?php
add_action('acf/init', 'block_faqs');
function block_faqs() {
    if ( ! function_exists('acf_register_block') ) return;

    $icon = '<svg ...>...</svg>';

    acf_register_block(array(
        'name'              => 'faqs',
        'title'             => __('FAQs'),
        'description'       => __('FAQs'),
        'render_template'   => 'block-parts/block-faqs.php',
        'category'          => 'theme',
        'icon'              => $icon,
        'keywords'          => array('questions','faq'),
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