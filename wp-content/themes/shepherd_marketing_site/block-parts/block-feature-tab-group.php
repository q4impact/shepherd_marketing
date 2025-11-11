<?php
// Setup block ID and class
$id = 'feature-tab-group-' . $block['id'];
$className = 'feature-tab-group';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
$features = get_field('features');
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> inner-wrapper clearfix">
    <?php if ($features) { 
        $i = 1;
        ?>
        <div class="feature-tab-group-trigger">Explore Admin Dashboard Features</div>
        <!------------------ Nav --------------------->
        <div class="feature-tab-group-nav">
            <?php foreach ($features as $feature) { ?>
                <div class="feature-tab-group-nav-item" data-index="<?php echo $i; ?>" data-id="<?php echo esc_attr($id); ?>">
                    <img src="<?php echo $feature['icon']['url']; ?>" alt="<?php echo $feature['icon']['alt']; ?>" /><?php echo $feature['label']; ?>
                </div>
                <?php $i++; ?>
            <?php } ?>
        </div>
        <!------------------ Cards --------------------->
        <?php $i = 1; ?>
        <?php foreach ($features as $feature) {
            $kicker = $feature['kicker'];
            $heading = $feature['heading'];
            $subhead = $feature['subhead'];
            $narrative = $feature['narrative'];
            $button = $feature['button'];
            $highlights = $feature['highlights'];
            ?>
            <div class="feature-tab-group-tab clearfix" data-index="<?php echo $i; ?>">
                <div class="feature-tab-group-tab-text">
                    <!--------------- Kicker -------------->
                    <?php if ($kicker['text']) { ?>
                        <<?php echo esc_html($kicker['html']); ?> style="color:<?php echo esc_html($kicker['color']); ?>; font-size:<?php echo esc_html($kicker['size']); ?>; font-weight:<?php echo esc_html($kicker['weight']); ?>; max-width:<?php echo $kicker['max_width']; ?>px"><?php echo esc_html($kicker['text']); ?></<?php echo esc_html($kicker['html']); ?>>
                    <?php } ?>
                    <!--------------- Heading -------------->
                    <?php if ($heading['text']) { ?>
                        <<?php echo esc_html($heading['html']); ?> style="color:<?php echo esc_html($heading['color']); ?>; font-size:<?php echo esc_html($heading['size']); ?>; font-weight:<?php echo esc_html($heading['weight']); ?>; max-width:<?php echo $heading['max_width']; ?>px"><?php echo esc_html($heading['text']); ?></<?php echo esc_html($heading['html']); ?>>
                    <?php } ?>
                    <!--------------- Subhead -------------->
                    <?php if ($subhead['text']) { ?>
                        <<?php echo esc_html($subhead['html']); ?> style="margin-top:5px; color:<?php echo esc_html($subhead['color']); ?>; font-size:<?php echo esc_html($subhead['size']); ?>; font-weight:<?php echo esc_html($subhead['weight']); ?>; max-width:<?php echo $subhead['max_width']; ?>px"><?php echo esc_html($subhead['text']); ?></<?php echo esc_html($subhead['html']); ?>>
                    <?php } ?>
                    <!--------------- Narrative -------------->
                    <?php if ($narrative['text']) { ?>
                        <<?php echo esc_html($narrative['html']); ?> style="margin-top:20px; color:<?php echo esc_html($narrative['color']); ?>; font-size:<?php echo esc_html($narrative['size']); ?>; font-weight:<?php echo esc_html($narrative['weight']); ?>; max-width:<?php echo $narrative['max_width']; ?>px"><?php echo esc_html($narrative['text']); ?></<?php echo esc_html($narrative['html']); ?>>
                    <?php } ?>
                    <!--------------- Highlights --------------->
                    <?php if ($highlights) { ?>
                        <ul class="highlights">
                            <?php foreach ($highlights as $highlight) {
                                ?>
                                <li>
                                    <?php if ($highlight['icon']) { ?>
                                        <img src="<?php echo $highlight['icon']['url']; ?>" alt="<?php echo $highlight['icon']['alt']; ?>" />
                                    <?php } ?>
                                    <<?php echo esc_html($highlight['html']); ?> style="color:<?php echo esc_html($highlight['color']); ?>; font-size:<?php echo esc_html($highlight['size']); ?>; font-weight:<?php echo esc_html($highlight['weight']); ?>; max-width:<?php echo $highlight['max_width']; ?>px"><?php echo esc_html($highlight['text']); ?></<?php echo esc_html($highlight['html']); ?>>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                    <!--------------- Button ---------------->
                    <?php if ($button['text']) { ?>
                        <a href="<?php echo $button['link']; ?>" class="button-solid-gold"><?php echo $button['text']; ?></a>
                    <?php } ?>
                </div>
                <!----------------- Image ------------------->
                <div class="feature-tab-group-tab-image">
                    <img src="<?php echo $feature['image']['url']; ?>" alt="" />
                </div>            
            </div>
            <?php $i++; ?>
        <?php } ?>
    <?php } ?>
</section>