<?php
function my_allowed_block_types( $allowed_blocks, $editor_context ) {
    return [
        'acf/banner',
        'acf/cards',
        'acf/heading-narrative',
        'acf/plan-cards',
        'acf/icon-list',
        'acf/card-tab-group',
        'acf/disclaimers',
        'acf/feature-tab-group',
        'acf/faqs',
        'acf/contact-form',
        'acf/three-column-heading-narrative',
        'acf/wysiwyg',
    ];
}
add_filter( 'allowed_block_types_all', 'my_allowed_block_types', 10, 2 );