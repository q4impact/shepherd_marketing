<?php
// Setup block ID and class
$id = 'views-slider-' . $block['id'];
$className = 'views-slider';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
$slides = get_field('views_slider_slides');
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> inner-wrapper">
    <div class="swiper">
        <div class="swiper-wrapper">
            <?php if ($slides) { ?>
                <?php foreach ($slides as $slide) {
                    $layout = $slide['layout'];
                    ?>
                    <div class="swiper-slide">
                        <?php if ($layout == 'layout1') { ?>
                            <div class="layout1">
                                <div>X</div>
                                <div>X</div>
                                <div>X</div>
                            </div>
                        <?php } else if ($layout == 'layout2') { ?>
                            <div class="layout2">
                                <div>X</div>
                                <div>X</div>
                            </div>
                        <?php } ?>
                        
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
    </div>
</section>

<script>
const swiper = new Swiper('.swiper', {
    loop: true,
    pagination: {
        el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});
</script>