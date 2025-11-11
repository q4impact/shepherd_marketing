<?php
// Setup block ID and class
$id = 'banner-' . $block['id'];
$className = 'block-banner';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
$slides = get_field('banner_slides');
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <?php if ($slides) { ?>
    <div class="swiper">
        <div class="swiper-wrapper">
            <?php foreach ($slides as $slide) { ?>
                <div class="swiper-slide">
                    <img src="<?php echo $slide['image']['url']; ?>" alt="<?php echo $slide['image']['alt']; ?>" />
                </div>
            <?php } ?>
        </div>
    
        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <?php } ?>
</section>

<script>
   document.addEventListener('DOMContentLoaded', (event) => {
    const swiper = new Swiper('.swiper', {
        slidesPerView: 'auto',
        loop: true,
        autoplay: {
            delay:4000, 
            disableOnInteraction: false, 
        },
        freeMode: true, 
        pauseOnMouseEnter: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});
</script>