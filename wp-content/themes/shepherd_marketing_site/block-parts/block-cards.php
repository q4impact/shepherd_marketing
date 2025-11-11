<?php
// Setup block ID and class
$id = 'cards-' . $block['id'];
$className = 'block-cards';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
$cards = get_field('cards');
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <?php if ($cards) { ?>
        <div class="inner-wrapper">
            <div class="cards-container">
                <?php foreach ($cards as $card) {
                    $logo = $card['logo'];
                    $kicker = $card['kicker'];
                    $heading = $card['heading'];
                    $subhead = $card['subhead'];
                    $narrative = $card['narrative'];
                    $button = $card['button'];
                    $image = $card['image'];
                    $image_placement = $image['placement'];
                    $settings = $card['settings'];
                    ?>
                    <div class="card <?php echo $image_placement; ?>" style="width:calc(<?php echo $settings['width']; ?> - 30px)">
                        <div class="card-filter"></div>
                        <div class="card-gradient"></div>
                        <!------------------ Card Text --------------------->
                        <div class="card-text <?php if ($image['file']) { echo $image_placement; } ?>">
                            <?php if ($logo) { ?>
                                <div class="card-logo">
                                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                                </div>
                            <?php } ?>
                            <?php if ($kicker['text']) { ?>
                                <<?php echo esc_html($kicker['html']); ?> style="color:<?php echo esc_html($kicker['color']); ?>; font-size:<?php echo esc_html($kicker['size']); ?>; font-weight:<?php echo esc_html($kicker['weight']); ?>"><?php echo esc_html($kicker['text']); ?></<?php echo esc_html($kicker['html']); ?>>
                            <?php } ?>
                            <?php if ($heading['text']) { ?>
                                <<?php echo esc_html($heading['html']); ?> style="color:<?php echo esc_html($heading['color']); ?>; font-size:<?php echo esc_html($heading['size']); ?>; font-weight:<?php echo esc_html($heading['weight']); ?>"><?php echo esc_html($heading['text']); ?></<?php echo esc_html($heading['html']); ?>>
                            <?php } ?>
                            <?php if ($subhead['text']) { ?>
                                <<?php echo esc_html($subhead['html']); ?> style="color:<?php echo esc_html($subhead['color']); ?>; font-size:<?php echo esc_html($subhead['size']); ?>; font-weight:<?php echo esc_html($subhead['weight']); ?>"><?php echo esc_html($subhead['text']); ?></<?php echo esc_html($subhead['html']); ?>>
                            <?php } ?>
                            <?php if ($narrative['text']) { ?>
                                <<?php echo esc_html($narrative['html']); ?> style="margin-top:20px; color:<?php echo esc_html($narrative['color']); ?>; font-size:<?php echo esc_html($narrative['size']); ?>; font-weight:<?php echo esc_html($narrative['weight']); ?>"><?php echo esc_html($narrative['text']); ?></<?php echo esc_html($narrative['html']); ?>>
                            <?php } ?>
                            <?php if ($button['text']) { ?>
                                <div class="card-button">
                                    <a href="<?php echo $button['link']; ?>" class="button-outline-white"><?php echo $button['text']; ?></a>
                                </div>
                            <?php } ?>
                        </div>
                        <!--------------------- Image ----------------------->
                        <?php if ($image['file']) { ?>
                            <div class="card-image <?php echo $image_placement; ?>">
                                <img src="<?php echo $image['file']['url']; ?>" alt="<?php echo $image['file']['alt']; ?>" />
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</section>