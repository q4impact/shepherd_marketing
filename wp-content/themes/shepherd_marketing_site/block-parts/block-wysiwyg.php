<?php
// Setup block ID and class
$id = 'wysiwyg-' . $block['id'];
$className = 'block-wysiwyg';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
$wysiwyg = get_field('wysiwyg');
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="inner-wrapper">
        <?php echo $wysiwyg; ?>
    </div>
</section>