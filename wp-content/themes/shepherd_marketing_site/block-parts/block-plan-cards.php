<?php
// Setup block ID and class
$id = 'plan-cards-' . $block['id'];
$className = 'plan-cards';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
$card_1 = get_field('card_1');
$card_2 = get_field('card_2');
$card_3 = get_field('card_3');
$form = get_field('contact_form');
$cards = array('1', '2', '3');
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
        <?php foreach ($cards as $card) {
            $card_group = get_field('card_'.$card);
            $heading = $card_group['heading'];
            $narrative = $card_group['narrative'];
            $price = $card_group['price'];
            $duration = $card_group['duration'];
            $fine_print = $card_group['fine_print'];
            $button = $card_group['button'];
            $get_started = $card_group['get_started'];
            $details = $card_group['details'];
            $all_details = $card_group['all_details'];
            ?>
            <div class="plan-card">
                <!----------------- Heading --------------->
                <?php if ($heading['text']) { ?>
                    <<?php echo $heading['html']; ?> style="color:<?php echo $heading['color']; ?>; font-size:<?php echo $heading['size']; ?>; font-weight:<?php echo $heading['weight']; ?>"><?php echo $heading['text']; ?></<?php echo $heading['html']; ?>>
                <?php } ?>
                <!----------------- Narrative --------------->
                <?php if ($narrative['text']) { ?>
                    <<?php echo $narrative['html']; ?> style="margin-top:10px; color:<?php echo $narrative['color']; ?>; font-size:<?php echo $narrative['size']; ?>; font-weight:<?php echo $narrative['weight']; ?>"><?php echo $narrative['text']; ?></<?php echo $narrative['html']; ?>>
                <?php } ?>
                <!---------------- Price ---------------->
                <?php if ($price['text']) { ?>
                    <div class="plan-card-price">
                        <<?php echo $price['html']; ?> style="margin-top:20px; color:<?php echo $price['color']; ?>; font-size:<?php echo $price['size']; ?>; font-weight:<?php echo $price['weight']; ?>"><?php echo $price['text']; ?></<?php echo $price['html']; ?>>
                        <<?php echo $duration['html']; ?> style="margin-top:20px; color:<?php echo $duration['color']; ?>; font-size:<?php echo $duration['size']; ?>; font-weight:<?php echo $duration['weight']; ?>"><?php echo $duration['text']; ?></<?php echo $duration['html']; ?>>                    
                    </div>
                <?php } ?>
                <!----------------- Fine Print -------------->
                <?php if ($fine_print['text']) { ?>
                    <<?php echo $fine_print['html']; ?> style="color:<?php echo $fine_print['color']; ?>; font-size:<?php echo $fine_print['size']; ?>; font-weight:<?php echo $fine_print['weight']; ?>"><?php echo $fine_print['text']; ?></<?php echo $fine_print['html']; ?>>
                <?php } ?>
                <!---------------- Button ---------------->
                <?php if ($button['text']) { ?>
                    <div>
                        <a href="<?php echo $button['link']; ?>" class="button-solid-gold"><?php echo $button['text']; ?></a>
                    </div>
                <?php } ?>
                <!--------------- Get Started Button ------------->
                <?php if ($get_started == true) { ?>
                    <div><a href="#" class="button-solid-gold get-started-button">Get Started</a></div>
                <?php } ?>
                <!---------------- Details ------------------->
                <?php if ($details) { ?>
                    <ul>
                        <?php foreach ($details as $detail) { ?>
                            <li>
                                <img src="<?php echo $detail['icon']['url']; ?>" alt="<?php echo $detail['icon']['alt']; ?>" />
                                <p><?php echo $detail['text']; ?></p>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
                <!-------------- All Details ---------------->
                <?php
                $heading = $all_details['heading'];
                $narrative = $all_details['narrative'];
                $all_details_items = $all_details['details'];
                if ($heading['text'] || $narrative['text'] || $all_details_items) { ?>
                    <a href="#" class="see-all-details">See All Details</a>
                    <div class="plan-card-all-details">
                        <div class="all-details-close"></div>
                        <div class="gradient"></div>
                        <?php if ($heading['text']) { ?>
                            <<?php echo $heading['html']; ?> style="color:<?php echo $heading['color']; ?>; font-size:<?php echo $heading['size']; ?>; font-weight:<?php echo $heading['weight']; ?>"><?php echo $heading['text']; ?></<?php echo $heading['html']; ?>>
                        <?php } ?>
                        <?php if ($narrative['text']) { ?>
                            <<?php echo $narrative['html']; ?> style="color:<?php echo $narrative['color']; ?>; font-size:<?php echo $narrative['size']; ?>; font-weight:<?php echo $narrative['weight']; ?>"><?php echo $narrative['text']; ?></<?php echo $narrative['html']; ?>>
                        <?php } ?>
                        <?php if ($all_details_items) { ?>
                            <div class="all-details-list">
                                <?php foreach ($all_details_items as $item) { ?>
                                    <div class="all-details-list-item">
                                        <h3><?php echo $item['heading']; ?></h3>
                                        <p><?php echo $item['narrative']; ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
                <div class="gradient"></div>
            </div>
        <?php } ?>
        <!--------------------- Contact Form Overlay ----------------------------->
        <div class="plan-cards-contact">
            <div id="plan-cards-contact-close"></div>
            <div class="gradient"></div>
            <?php $heading = $form['heading']; ?>
            <?php if ($heading['text']) { ?>
                <<?php echo $heading['html']; ?> style="color:<?php echo $heading['color']; ?>; font-size:<?php echo $heading['size']; ?>; font-weight:<?php echo $heading['weight']; ?>"><?php echo $heading['text']; ?></<?php echo $heading['html']; ?>>
            <?php } ?>
            <?php $narrative = $form['narrative']; ?>
            <?php if ($narrative['text']) { ?>
                <<?php echo $narrative['html']; ?> style="margin-top:10px; color:<?php echo $narrative['color']; ?>; font-size:<?php echo $narrative['size']; ?>; font-weight:<?php echo $narrative['weight']; ?>"><?php echo $narrative['text']; ?></<?php echo $narrative['html']; ?>>
            <?php } ?>
            <div class="plan-cards-form">
                <?php echo do_shortcode('[wpforms id="1177" title="false"]'); ?>
            </div>
        </div>
</section>
<?php if (get_field('all_plans_inclusions')) { ?>
    <div class="all-plan-inclusions inner-wrapper">
        <h3>All Plans Include:</h3>
        <ul>
            <?php foreach (get_field('all_plans_inclusions') as $inclusion) { ?>
                <li><img src="<?php echo $inclusion['icon']['url']; ?>" alt="<?php echo $inclusion['icon']['alt']; ?>" /><?php echo $inclusion['text']; ?></li>
            <?php } ?>
        </ul>
    </div>
<?php } ?>