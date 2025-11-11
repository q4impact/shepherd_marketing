<?php
// Setup block ID and class
$id = 'three-column-heading-narrative-' . $block['id'];
$className = 'block-three-column-heading-narrative';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
$column_1 = get_field('column_1');
$column_1_heading = $column_1['heading'];
$column_1_narrative = $column_1['narrative'];
$column_1_button = $column_1['button'];
$column_2 = get_field('column_2');
$column_2_heading = $column_2['heading'];
$column_2_narrative = $column_2['narrative'];
$column_2_button = $column_2['button'];
$column_3 = get_field('column_3');
$column_3_heading = $column_3['heading'];
$column_3_narrative = $column_3['narrative'];
$column_3_button = $column_3['button'];
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="inner-wrapper clearfix">
        <div class="three-column-heading-narrative-column">
            <?php if ($column_1_heading['text']) { ?>
                <<?php echo esc_html($column_1_heading['html']); ?> class="first-element" style="color:<?php echo esc_html($column_1_heading['color']); ?>; font-size:<?php echo esc_html($column_1_heading['size']); ?>; font-weight:<?php echo esc_html($column_1_heading['weight']); ?>"><?php echo esc_html($column_1_heading['text']); ?></<?php echo esc_html($column_1_heading['html']); ?>>
            <?php } ?>
            <?php if ($column_1_narrative['text']) { ?>
                <<?php echo esc_html($column_1_narrative['html']); ?> style="margin-top:10px; color:<?php echo esc_html($column_1_narrative['color']); ?>; font-size:<?php echo esc_html($column_1_narrative['size']); ?>; font-weight:<?php echo esc_html($column_1_narrative['weight']); ?>"><?php echo esc_html($column_1_narrative['text']); ?></<?php echo esc_html($column_1_narrative['html']); ?>>
            <?php } ?>
            <?php if ($column_1_button['text']) {
                ?>
                <a href="<?php echo $column_1_button['link']; ?>" class="button-outline-white"><?php echo $column_1_button['text']; ?></a>
            <?php } ?>
        </div>
        <div class="three-column-heading-narrative-column">
            <?php if ($column_2_heading['text']) { ?>
                <<?php echo esc_html($column_2_heading['html']); ?> class="first-element" style="color:<?php echo esc_html($column_2_heading['color']); ?>; font-size:<?php echo esc_html($column_2_heading['size']); ?>; font-weight:<?php echo esc_html($column_2_heading['weight']); ?>"><?php echo esc_html($column_2_heading['text']); ?></<?php echo esc_html($column_2_heading['html']); ?>>
            <?php } ?>
            <?php if ($column_2_narrative['text']) { ?>
                <<?php echo esc_html($column_2_narrative['html']); ?> style="margin-top:10px; color:<?php echo esc_html($column_2_narrative['color']); ?>; font-size:<?php echo esc_html($column_2_narrative['size']); ?>; font-weight:<?php echo esc_html($column_2_narrative['weight']); ?>"><?php echo esc_html($column_2_narrative['text']); ?></<?php echo esc_html($column_2_narrative['html']); ?>>
            <?php } ?>
            <?php if ($column_2_button['text']) {
                ?>
                <a href="<?php echo $column_2_button['link']; ?>" class="button-outline-white"><?php echo $column_2_button['text']; ?></a>
            <?php } ?>
        </div>
        <div class="three-column-heading-narrative-column">
            <?php if ($column_3_heading['text']) { ?>
                <<?php echo esc_html($column_3_heading['html']); ?> class="first-element" style="color:<?php echo esc_html($column_3_heading['color']); ?>; font-size:<?php echo esc_html($column_3_heading['size']); ?>; font-weight:<?php echo esc_html($column_3_heading['weight']); ?>"><?php echo esc_html($column_3_heading['text']); ?></<?php echo esc_html($column_3_heading['html']); ?>>
            <?php } ?>
            <?php if ($column_3_narrative['text']) { ?>
                <<?php echo esc_html($column_3_narrative['html']); ?> style="margin-top:10px; color:<?php echo esc_html($column_3_narrative['color']); ?>; font-size:<?php echo esc_html($column_3_narrative['size']); ?>; font-weight:<?php echo esc_html($column_3_narrative['weight']); ?>"><?php echo esc_html($column_3_narrative['text']); ?></<?php echo esc_html($column_3_narrative['html']); ?>>
            <?php } ?>
            <?php if ($column_3_button['text']) {
                ?>
                <a href="<?php echo $column_3_button['link']; ?>" class="button-outline-white"><?php echo $column_3_button['text']; ?></a>
            <?php } ?>
        </div>
    </div>
</section>