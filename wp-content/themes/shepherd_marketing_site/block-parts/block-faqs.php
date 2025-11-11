<?php
// Setup block ID and class
$id = 'faqs-' . $block['id'];
$className = 'block-faqs';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
$faq_types = get_terms( array(
    'taxonomy'   => 'faq_type',
    'hide_empty' => false,
));
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="inner-wrapper">
        <h4>Select Category</h4>
        <div id="faq-filter-trigger">Select a Category: <span>All</span></div>
        <ul class="faqs-filter">
            <li data-id="all" class="active">All</li>
            <?php foreach ($faq_types as $term) { ?>
                <li data-id="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></li>
            <?php } ?>
        </ul>
        <div class="faqs-loader"><div class="loader"></div></div>
        <div class="faqs-list"></div>
    </div>
</section>