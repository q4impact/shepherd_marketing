<?php
// Setup block ID and class
$id = 'heading-narrative-' . $block['id'];
$className = 'block-heading-narrative';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
$background = get_field('heading_narrative_background_color');
$kicker = get_field('heading_narrative_kicker');
$heading = get_field('heading_narrative_heading');
$narrative = get_field('heading_narrative_narrative');
$buttons = get_field('heading_narrative_buttons');
$button_1 = $buttons['button_1'];
$button_2 = $buttons['button_2'];
$video = $buttons['video'];
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="background-color:<?php echo $background; ?>">
    <div class="inner-wrapper">
        <?php if ($kicker['kicker']) { ?>
            <<?php echo esc_html($kicker['html']); ?> style="color:<?php echo esc_html($kicker['color']); ?>; font-size:<?php echo esc_html($kicker['size']); ?>; font-weight:<?php echo esc_html($kicker['weight']); ?>; max-width:<?php echo esc_html($kicker['max_width']); ?>px"><?php echo esc_html($kicker['kicker']); ?></<?php echo esc_html($kicker['html']); ?>>
        <?php } ?>
        <?php if ($heading['heading']) { ?>
            <<?php echo esc_html($heading['html']); ?> style="color:<?php echo esc_html($heading['color']); ?>; font-size:<?php echo esc_html($heading['size']); ?>; font-weight:<?php echo esc_html($heading['weight']); ?>; max-width:<?php echo esc_html($heading['max_width']); ?>px"><?php echo esc_html($heading['heading']); ?></<?php echo esc_html($heading['html']); ?>>
        <?php } ?>
        <?php if ($narrative['narrative']) { ?>
            <<?php echo esc_html($narrative['html']); ?> style="color:<?php echo esc_html($narrative['color']); ?>; font-size:<?php echo esc_html($narrative['size']); ?>; font-weight:<?php echo esc_html($narrative['weight']); ?>; max-width:<?php echo esc_html($narrative['max_width']); ?>px"><?php echo esc_html($narrative['narrative']); ?></<?php echo esc_html($narrative['html']); ?>>
        <?php } ?>
        <?php if ($button_1['button_text'] || $button_2['button_text'] || $video) { ?>
        <div id="heading-narrative-buttons">
            <?php if ($button_1['button_text']) { ?>
                <a href="<?php echo $button_1['button_link']; ?>" class="button-solid-gold"><?php echo $button_1['button_text']; ?></a>
            <?php } ?>
            <?php if ($video) { ?>
                <a href="#" class="button-solid-gold video-demo-button"><?php echo $video; ?></a>
            <?php } ?>
            <?php if ($button_2['button_text']) { ?>
                <a href="<?php echo $button_2['button_link']; ?>" class="button-outline-white"><?php echo $button_2['button_text']; ?></a>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</section>