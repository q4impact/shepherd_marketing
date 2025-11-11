<?php
add_action('acf/init', 'block_three_column_heading_narrative');
function block_three_column_heading_narrative() {
    if( function_exists('acf_register_block') ) {
        $icon = '';    
        acf_register_block(array(
            'name'              => 'three-column-heading-narrative',
            'title'             => __('Three Column Heading & Narrative'),
            'description'       => __('Three Column Heading & Narrative'),
            'render_template'   => 'block-parts/block-three-column-heading-narrative.php',
            'category'          => 'theme',
            'icon'              => $icon,
            'keywords'          => array( '3', 'column', 'heading', 'narrative' ),
            'supports' => array(
                'align'           => false,       // enables align options (left, right, center, wide, full)
                'align_text'      => false,       // enables text alignment toolbar
                'align_content'   => false,       // enables vertical alignment in container blocks
                'mode'            => true,       // allows switching between preview/edit mode
                'multiple'        => true,        // allows multiple instances of the block
                'jsx'             => true,        // enables JSX rendering in the editor (editor preview)
                'anchor'          => true,        // allows setting an HTML anchor/id
                'customClassName' => true,        // allows adding a custom class name in the block settings
                'className'       => true,        // enables the `className` property on the frontend
            )
        ));
    }
}