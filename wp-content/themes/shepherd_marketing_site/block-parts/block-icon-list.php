<?php
// Setup block ID and class
$id = 'icon-list-' . $block['id'];
$className = 'icon-list';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
$list_items = get_field('icon_list');
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> inner-wrapper clearfix">
    <?php foreach ($list_items as $item) {
        $heading = $item['heading'];
        $narrative = $item['narrative'];
        ?>
        <li>
            <div class="icon-list-image">
                <?php if ($item['icon']) { ?>
                    <img src="<?php echo $item['icon']['url']; ?>" alt="<?php echo $item['icon']['alt']; ?>" />
                <?php } ?>
            </div>
            <div class="icon-list-text">
                <?php if ($heading['text']) { ?>
                    <<?php echo esc_html($heading['html']); ?> style="color:<?php echo esc_html($heading['color']); ?>; font-size:<?php echo esc_html($heading['size']); ?>; font-weight:<?php echo esc_html($heading['weight']); ?>"><?php echo esc_html($heading['text']); ?></<?php echo esc_html($heading['html']); ?>>
                <?php } ?>
                <?php if ($narrative['text']) { ?>
                    <<?php echo esc_html($narrative['html']); ?> style="color:<?php echo esc_html($narrative['color']); ?>; font-size:<?php echo esc_html($narrative['size']); ?>; font-weight:<?php echo esc_html($narrative['weight']); ?>"><?php echo esc_html($narrative['text']); ?></<?php echo esc_html($narrative['html']); ?>>
                <?php } ?>
            </div>
        </li>
    <?php } ?>
</section>