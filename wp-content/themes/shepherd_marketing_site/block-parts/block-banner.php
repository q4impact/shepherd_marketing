<?php
// Setup block ID and class
$id = 'banner-' . $block['id'];
$className = 'block-banner';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
<?php
$type = get_field('banner_type');
if ($type == 'basic') { ?>

<?php } else if ($type == 'image') { ?>

<?php } else if ($type == 'video') { ?>

<?php } else if ($type == 'slider') {
    $i = 1;
    ?>
    <section id="slider-<?php echo esc_attr($id); ?>" class="banner-slider">
    <?php while ($i < 4) {
        $slide = get_field('slide_'.$i);
        $heading = $slide['heading'];
        $subhead = $slide['subhead'];
        $narrative = $slide['narrative'];
        $button_1 = $slide['button_1'];
        $button_2 = $slide['button_2'];
        ?>
        <div class="banner-slide">
            <?php if ($heading): ?>
                <h1><?php echo esc_html($heading); ?></h1>
            <?php endif; ?>
            <?php if ($subhead): ?>
                <h2><?php echo esc_html($subhead); ?></h2>
            <?php endif; ?>
            <?php if ($narrative): ?>
                <p><?php echo esc_html($narrative); ?></p>
            <?php endif; ?>
            <?php if ($button_1['button_text']) { ?>
                <a href="<?php echo $button_1['button_link']; ?>" class="button button-solid-navy"><?php echo $button_1['button_text']; ?></a>
            <?php } ?>
            <?php if ($button_2['button_text']) { ?>
                <a href="<?php echo $button_2['button_link']; ?>" class="button button-outline-dark"><?php echo $button_2['button_text']; ?></a>
            <?php } ?>
        </div>
        <?php $i++; ?>
    <?php } ?>
    </section>
    <script>
    jQuery(document).ready(function($) {
        $('#slider-<?php echo esc_attr($id); ?>').slick({
            dots: true,
            arrows: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 3000,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
        });
    });
    </script>
<?php } ?>

</section>