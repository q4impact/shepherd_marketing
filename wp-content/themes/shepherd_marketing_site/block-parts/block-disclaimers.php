<?php
// Setup block ID and class
$id = 'disclaimers-' . $block['id'];
$className = 'block-disclaimers';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
$disclaimers = get_field('disclaimers');
$heading = get_field('disclaimers-heading');
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <?php if ($disclaimers) { ?>
        <div class="inner-wrapper">
            <?php if ($heading['text']) { ?>
                <div class="disclaimers-heading">
                    <<?php echo esc_html($heading['html']); ?> style="color:<?php echo esc_html($heading['color']); ?>; font-size:<?php echo esc_html($heading['size']); ?>; font-weight:<?php echo esc_html($heading['weight']); ?>"><?php echo esc_html($heading['text']); ?></<?php echo esc_html($heading['html']); ?>>
                </div>
            <?php } ?>
            <ul class="disclaimers-container">
                <?php foreach ($disclaimers as $disclaimer) { ?>
                    <?php if ($disclaimer['text']) { ?>
                        <li>
                            <<?php echo esc_html($disclaimer['html']); ?> style="color:<?php echo esc_html($disclaimer['color']); ?>; font-size:<?php echo esc_html($disclaimer['size']); ?>; font-weight:<?php echo esc_html($disclaimer['weight']); ?>"><?php echo esc_html($disclaimer['text']); ?></<?php echo esc_html($disclaimer['html']); ?>>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>
</section>