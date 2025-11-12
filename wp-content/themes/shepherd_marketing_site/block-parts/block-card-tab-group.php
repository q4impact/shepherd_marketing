<?php
// Setup block ID and class
$id = 'card-tab-group-' . $block['id'];
$className = 'card-tab-group';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
$tabs = get_field('card_tab_groups');
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> inner-wrapper clearfix">
    <div class="card-tab-group-trigger">Select a Feature to Explore</div>
    <!--------------- Build the nav -------------------->
    <?php if ($tabs) { ?>
        <?php $i = 1; ?>
        <ul class="card-tab-group-nav">
            <?php foreach ($tabs as $tab) { ?>
                <li class="card-tab-nav" data-index="<?php echo $i; ?>" data-id="<?php echo esc_attr($id); ?>">
                    <?php echo $tab['tab_group_name']; ?>
                </li>
                <?php $i++; ?>
            <?php } ?>
        </ul>
    <?php } ?>
    <!----------------- Build the tabs ------------------>
    <?php if ($tabs) {
        $i = 1;
    ?>
        <?php foreach ($tabs as $tab) { ?>
            <div class="card-tab-group-tab" data-index="<?php echo $i; ?>">
                <!--------------- Card 1 -------------->
                <div class="card-tab-group-card-1">
                    <?php
                    $card_1 = $tab['card_1'];
                    $kicker = $card_1['kicker'];
                    $heading = $card_1['heading'];
                    $narrative = $card_1['narrative'];
                    $button = $card_1['button'];
                    ?>
                    <div class="card-tab-group-card-1-filter"></div>
                    <div class="card-tab-group-card-1-gradient"></div>
                    <div class="card-tab-group-card-1-text">
                        <!--------------- Kicker -------------->
                        <?php if ($kicker['text']) { ?>
                            <div class="kicker-container">
                                <?php if ($kicker['icon']) { ?>
                                    <img src="<?php echo $kicker['icon']['url']; ?>" alt="<?php echo $kicker['icon']['alt']; ?>" />
                                <?php } ?>
                                <<?php echo esc_html($kicker['html']); ?> style="color:<?php echo esc_html($kicker['color']); ?>; font-size:<?php echo esc_html($kicker['size']); ?>; font-weight:<?php echo esc_html($kicker['weight']); ?>"><?php echo esc_html($kicker['text']); ?></<?php echo esc_html($kicker['html']); ?>>
                            </div>
                        <?php } ?>
                        <!--------------- Heading -------------->
                        <?php if ($heading['text']) { ?>
                            <<?php echo esc_html($heading['html']); ?> style="margin-bottom:20px; color:<?php echo esc_html($heading['color']); ?>; font-size:<?php echo esc_html($heading['size']); ?>; font-weight:<?php echo esc_html($heading['weight']); ?>"><?php echo esc_html($heading['text']); ?></<?php echo esc_html($heading['html']); ?>>
                        <?php } ?>
                        <!--------------- Narrative -------------->
                        <?php if ($narrative['text']) { ?>
                            <<?php echo esc_html($narrative['html']); ?> style="margin-bottom:20px; color:<?php echo esc_html($narrative['color']); ?>; font-size:<?php echo esc_html($narrative['size']); ?>; font-weight:<?php echo esc_html($narrative['weight']); ?>"><?php echo esc_html($narrative['text']); ?></<?php echo esc_html($narrative['html']); ?>>
                        <?php } ?>
                        <!--------------- Button -------------->
                        <?php if ($button['text']) { ?>
                            <a href="<?php echo $button['link']; ?>" class="button-solid-gold"><?php echo $button['text']; ?></a>
                        <?php } ?>
                    </div>
                    <div class="card-tab-group-card-1-image">
                        <?php if (is_array($card_1['image'])) : ?>
                            <img src="<?php echo esc_url($card_1['image']['url']); ?>" alt="<?php echo esc_attr($card_1['image']['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <!-- this element keeps cards 2 & 3 equal height -->
                <div class="flex-row">
                    <!--------------- Card 2 -------------->
                    <div class="card-tab-group-card-2">
                        <?php
                        $card_2 = $tab['card_2'];
                        $kicker = $card_2['kicker'];
                        $heading = $card_2['heading'];
                        $narrative = $card_2['narrative'];
                        $button = $card_2['button'];
                        ?>
                        <div class="card-tab-group-filter"></div>
                        <div class="card-tab-group-gradient"></div>
                        <div class="card-tab-group-card-text">
                            <!--------------- Kicker -------------->
                            <?php if ($kicker['text']) { ?>
                                <div class="kicker-container">
                                    <?php if ($kicker['icon']) { ?>
                                        <img src="<?php echo $kicker['icon']['url']; ?>" alt="<?php echo $kicker['icon']['alt']; ?>" />
                                    <?php } ?>
                                    <<?php echo esc_html($kicker['html']); ?> style="color:<?php echo esc_html($kicker['color']); ?>; font-size:<?php echo esc_html($kicker['size']); ?>; font-weight:<?php echo esc_html($kicker['weight']); ?>"><?php echo esc_html($kicker['text']); ?></<?php echo esc_html($kicker['html']); ?>>
                                </div>
                            <?php } ?>
                            <!--------------- Heading -------------->
                            <?php if ($heading['text']) { ?>
                                <<?php echo esc_html($heading['html']); ?> style="margin-bottom:20px; color:<?php echo esc_html($heading['color']); ?>; font-size:<?php echo esc_html($heading['size']); ?>; font-weight:<?php echo esc_html($heading['weight']); ?>"><?php echo esc_html($heading['text']); ?></<?php echo esc_html($heading['html']); ?>>
                            <?php } ?>
                            <!--------------- Narrative -------------->
                            <?php if ($narrative['text']) { ?>
                                <<?php echo esc_html($narrative['html']); ?> style="margin-bottom:20px; color:<?php echo esc_html($narrative['color']); ?>; font-size:<?php echo esc_html($narrative['size']); ?>; font-weight:<?php echo esc_html($narrative['weight']); ?>"><?php echo esc_html($narrative['text']); ?></<?php echo esc_html($narrative['html']); ?>>
                            <?php } ?>
                            <!--------------- Button -------------->
                            <?php if ($button['text']) { ?>
                                <a href="<?php echo $button['link']; ?>" class="button-solid-gold"><?php echo $button['text']; ?></a>
                            <?php } ?>
                        </div>
                        <div class="card-tab-group-card-image">
                            <?php if (is_array($card_2['image'])) : ?>
                                <img src="<?php echo esc_url($card_2['image']['url']); ?>" alt="<?php echo esc_attr($card_2['image']['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <!--------------- Card 3 -------------->
                    <div class="card-tab-group-card-3">
                        <?php
                        $card_3 = $tab['card_3'];
                        $kicker = $card_3['kicker'];
                        $heading = $card_3['heading'];
                        $narrative = $card_3['narrative'];
                        $button = $card_3['button'];
                        ?>
                        <div class="card-tab-group-filter"></div>
                        <div class="card-tab-group-gradient"></div>
                        <div class="card-tab-group-card-text">
                            <!--------------- Kicker -------------->
                            <?php if ($kicker['text']) { ?>
                                <div class="kicker-container">
                                    <?php if ($kicker['icon']) { ?>
                                        <img src="<?php echo $kicker['icon']['url']; ?>" alt="<?php echo $kicker['icon']['alt']; ?>" />
                                    <?php } ?>
                                    <<?php echo esc_html($kicker['html']); ?> style="color:<?php echo esc_html($kicker['color']); ?>; font-size:<?php echo esc_html($kicker['size']); ?>; font-weight:<?php echo esc_html($kicker['weight']); ?>"><?php echo esc_html($kicker['text']); ?></<?php echo esc_html($kicker['html']); ?>>
                                </div>
                            <?php } ?>
                            <!--------------- Heading -------------->
                            <?php if ($heading['text']) { ?>
                                <<?php echo esc_html($heading['html']); ?> style="margin-bottom:20px; color:<?php echo esc_html($heading['color']); ?>; font-size:<?php echo esc_html($heading['size']); ?>; font-weight:<?php echo esc_html($heading['weight']); ?>"><?php echo esc_html($heading['text']); ?></<?php echo esc_html($heading['html']); ?>>
                            <?php } ?>
                            <!--------------- Narrative -------------->
                            <?php if ($narrative['text']) { ?>
                                <<?php echo esc_html($narrative['html']); ?> style="margin-bottom:20px; color:<?php echo esc_html($narrative['color']); ?>; font-size:<?php echo esc_html($narrative['size']); ?>; font-weight:<?php echo esc_html($narrative['weight']); ?>"><?php echo esc_html($narrative['text']); ?></<?php echo esc_html($narrative['html']); ?>>
                            <?php } ?>
                            <!--------------- Button -------------->
                            <?php if ($button['text']) { ?>
                                <a href="<?php echo $button['link']; ?>" class="button-solid-gold"><?php echo $button['text']; ?></a>
                            <?php } ?>
                        </div>
                        <div class="card-tab-group-card-image">
                            <?php if (is_array($card_3['image'])) : ?>
                                <img src="<?php echo esc_url($card_3['image']['url']); ?>" alt="<?php echo esc_attr($card_3['image']['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; ?>
        <?php } ?>
    <?php } ?>
</section>