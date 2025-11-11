<?php
add_action('acf/init', 'block_heading_narrative');
function block_heading_narrative() {
    if ( ! function_exists('acf_register_block') ) return;

    $icon = '<svg ...>...</svg>';

    acf_register_block(array(
        'name'              => 'heading-narrative',
        'title'             => __('Heading & Narrative'),
        'description'       => __('Heading & Narrative'),
        'render_template'   => 'block-parts/block-heading-narrative.php',
        'category'          => 'theme',
        'icon'              => $icon,
        'keywords'          => array('heading','narrative'),

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

        'enqueue_assets' => function () {
            if ( ! is_admin() ) return;
            if ( function_exists('get_current_screen') ) {
                $screen = get_current_screen();
                // In case this fires in non-editor admin screens
                if ( method_exists( $screen, 'is_block_editor' ) && ! $screen->is_block_editor() ) {
                    return;
                }
            }

            $base = get_template_directory_uri() . '/library/blocks';
            $path = get_template_directory()     . '/library/blocks';

            wp_enqueue_script(
                'hn-admin-collapse',
                $base . '/block-scripts.js',
                ['wp-blocks','wp-element','wp-components','wp-block-editor','wp-data','wp-hooks','wp-i18n','wp-compose'],
                ( file_exists($path . '/block-scripts.js') ? filemtime($path . '/block-scripts.js') : null ),
                true
            );

            wp_enqueue_style(
                'hn-admin-collapse-css',
                $base . '/block-css.css',
                ['wp-edit-blocks'],
                ( file_exists($path . '/block-css.css') ? filemtime($path . '/block-css.css') : null )
            );
        }
    ));
}
