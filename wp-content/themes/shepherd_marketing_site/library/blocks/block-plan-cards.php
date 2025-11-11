<?php
add_action('acf/init', 'block_plan_cards');
function block_plan_cards() {
    if ( ! function_exists('acf_register_block') ) return;

    $icon = '';

    acf_register_block(array(
        'name'              => 'plan-cards',
        'title'             => __('Plan Cards'),
        'description'       => __('Plan Cards'),
        'render_template'   => 'block-parts/block-plan-cards.php',
        'category'          => 'theme',
        'icon'              => $icon,
        'keywords'          => array('pricing','plans'),
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