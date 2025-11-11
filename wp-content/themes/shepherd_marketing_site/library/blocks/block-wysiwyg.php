<?php
add_action('acf/init', 'block_wysiwyg');
function block_wysiwyg() {
    if ( ! function_exists('acf_register_block') ) return;
    $icon = '';
    acf_register_block(array(
        'name'              => 'wysiwyg',
        'title'             => __('WYSIWYG'),
        'description'       => __('WYSIWYG'),
        'render_template'   => 'block-parts/block-wysiwyg.php',
        'category'          => 'theme',
        'icon'              => $icon,
        'keywords'          => array('editor','wysiwyg'),
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