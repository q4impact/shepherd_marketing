<?php
add_action('acf/init', 'block_contact_form');
function block_contact_form() {
    if( function_exists('acf_register_block') ) {
        $icon = '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M0,0v512h512V0H0ZM164.73,39.07c45.44,0,44.66,68.56,0,68.56s-45.47-68.56,0-68.56ZM130.3,187.46l57.17-57.16,27.39,27.44,1.69.33,90.6-90.63,74.55,74.54v78.9l-1,1h-249.4l-1-1v-33.43ZM492,492H20v-224.45h472v224.45Z"/></svg>';    
        acf_register_block(array(
            'name'              => 'contact-form',
            'title'             => __('Contact Form'),
            'description'       => __('Contact Form'),
            'render_template'   => 'block-parts/block-contact-form.php',
            'category'          => 'theme',
            'icon'              => $icon,
            'keywords'          => array( 'form', 'contact' ),
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