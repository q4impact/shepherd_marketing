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
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
        <!--------------------------------------- Card 1 ------------------------------------>
        <div class="plan-card">
            <?php if ($card_1['heading']['text']) { ?>
                <<?php echo $card_1['heading']['html']; ?> style="color:<?php echo $card_1['heading']['color']; ?>; font-size:<?php echo $card_1['heading']['size']; ?>; font-weight:<?php echo $card_1['heading']['weight']; ?>"><?php echo $card_1['heading']['text']; ?></<?php echo $card_1['heading']['html']; ?>>
            <?php } ?>
            <?php if ($card_1['narrative']['text']) { ?>
                <<?php echo $card_1['narrative']['html']; ?> style="margin-top:10px; color:<?php echo $card_1['narrative']['color']; ?>; font-size:<?php echo $card_1['narrative']['size']; ?>; font-weight:<?php echo $card_1['narrative']['weight']; ?>"><?php echo $card_1['narrative']['text']; ?></<?php echo $card_1['heading']['html']; ?>>
            <?php } ?>
            <?php if ($card_1['price']['text']) { ?>
                <div class="plan-card-price">
                    <<?php echo $card_1['price']['html']; ?> style="margin-top:20px; color:<?php echo $card_1['price']['color']; ?>; font-size:<?php echo $card_1['price']['size']; ?>; font-weight:<?php echo $card_1['price']['weight']; ?>"><?php echo $card_1['price']['text']; ?></<?php echo $card_1['price']['html']; ?>>
                    <<?php echo $card_1['duration']['html']; ?> style="margin-top:20px; color:<?php echo $card_1['duration']['color']; ?>; font-size:<?php echo $card_1['duration']['size']; ?>; font-weight:<?php echo $card_1['duration']['weight']; ?>"><?php echo $card_1['duration']['text']; ?></<?php echo $card_1['duration']['html']; ?>>                    
                </div>
            <?php } ?>
            <?php if ($card_1['fine_print']['text']) { ?>
                <<?php echo $card_1['fine_print']['html']; ?> style="color:<?php echo $card_1['fine_print']['color']; ?>; font-size:<?php echo $card_1['fine_print']['size']; ?>; font-weight:<?php echo $card_1['fine_print']['weight']; ?>"><?php echo $card_1['fine_print']['text']; ?></<?php echo $card_1['fine_print']['html']; ?>>
            <?php } ?>
            <?php if ($card_1['button']['text']) { ?>
                <div>
                    <a href="<?php echo $card_1['button']['link']; ?>" class="button-solid-gold"><?php echo $card_1['button']['text']; ?></a>
                </div>
            <?php } ?>
            <?php if ($card_1['get_started'] == true) { ?>
                <div><a href="#" class="button-solid-gold get-started-button">Get Started</a></div>
            <?php } ?>
            <?php if ($card_1['details']) { ?>
                <ul>
                    <?php foreach ($card_1['details'] as $detail) { ?>
                        <li>
                            <img src="<?php echo $detail['icon']['url']; ?>" alt="<?php echo $detail['icon']['alt']; ?>" />
                            <p><?php echo $detail['text']; ?></p>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
            <?php
            $details = $card_1['all_details']['details'];
            if ($details) { ?>
                <a href="#" class="see-all-details">See All Details</a>
            <?php } ?>
            <?php if ($card_1['all_details']) {
                $heading = $card_1['all_details']['heading'];
                $narrative = $card_1['all_details']['narrative'];
                ?>
                <div class="plan-card-all-details">
                    <div class="all-details-close"></div>
                    <div class="gradient"></div>
                    <?php if ($heading['text']) { ?>
                        <<?php echo $heading['html']; ?> style="color:<?php echo $heading['color']; ?>; font-size:<?php echo $heading['size']; ?>; font-weight:<?php echo $heading['weight']; ?>"><?php echo $heading['text']; ?></<?php echo $heading['html']; ?>>
                    <?php } ?>
                    <?php if ($narrative['text']) { ?>
                        <<?php echo $narrative['html']; ?> style="color:<?php echo $narrative['color']; ?>; font-size:<?php echo $narrative['size']; ?>; font-weight:<?php echo $narrative['weight']; ?>"><?php echo $narrative['text']; ?></<?php echo $narrative['html']; ?>>
                    <?php } ?>
                    <?php if ($details) { ?>
                        <div class="all-details-list">
                            <?php foreach ($details as $detail) { ?>
                                <div class="all-details-list-item">
                                    <h3><?php echo $detail['heading']; ?></h3>
                                    <p><?php echo $detail['narrative']; ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="gradient"></div>
        </div>
        <!--------------------------------------- Card 2 ------------------------------------>
        <div class="plan-card">
            <?php if ($card_2['heading']['text']) { ?>
                <<?php echo $card_2['heading']['html']; ?> style="color:<?php echo $card_2['heading']['color']; ?>; font-size:<?php echo $card_2['heading']['size']; ?>; font-weight:<?php echo $card_2['heading']['weight']; ?>"><?php echo $card_2['heading']['text']; ?></<?php echo $card_2['heading']['html']; ?>>
            <?php } ?>
            <?php if ($card_2['narrative']['text']) { ?>
                <<?php echo $card_2['narrative']['html']; ?> style="margin-top:10px; color:<?php echo $card_2['narrative']['color']; ?>; font-size:<?php echo $card_2['narrative']['size']; ?>; font-weight:<?php echo $card_2['narrative']['weight']; ?>"><?php echo $card_2['narrative']['text']; ?></<?php echo $card_2['heading']['html']; ?>>
            <?php } ?>
            <?php if ($card_2['price']['text']) { ?>
                <div class="plan-card-price">
                    <<?php echo $card_2['price']['html']; ?> style="margin-top:20px; color:<?php echo $card_2['price']['color']; ?>; font-size:<?php echo $card_2['price']['size']; ?>; font-weight:<?php echo $card_2['price']['weight']; ?>"><?php echo $card_2['price']['text']; ?></<?php echo $card_2['price']['html']; ?>>
                    <<?php echo $card_2['duration']['html']; ?> style="margin-top:20px; color:<?php echo $card_2['duration']['color']; ?>; font-size:<?php echo $card_2['duration']['size']; ?>; font-weight:<?php echo $card_2['duration']['weight']; ?>"><?php echo $card_2['duration']['text']; ?></<?php echo $card_2['duration']['html']; ?>>                    
                </div>
            <?php } ?>
            <?php if ($card_2['fine_print']['text']) { ?>
                <<?php echo $card_2['fine_print']['html']; ?> style="color:<?php echo $card_2['fine_print']['color']; ?>; font-size:<?php echo $card_2['fine_print']['size']; ?>; font-weight:<?php echo $card_2['fine_print']['weight']; ?>"><?php echo $card_2['fine_print']['text']; ?></<?php echo $card_2['fine_print']['html']; ?>>
            <?php } ?>
            <?php if ($card_2['button']['text']) { ?>
                <div>
                    <a href="<?php echo $card_2['button']['link']; ?>" class="button-solid-gold"><?php echo $card_2['button']['text']; ?></a>
                </div>
            <?php } ?>
            <?php if ($card_2['get_started'] == true) { ?>
                <div><a href="#" class="button-solid-gold get-started-button">Get Started</a></div>
            <?php } ?>
            <?php if ($card_2['details']) { ?>
                <ul>
                    <?php foreach ($card_2['details'] as $detail) { ?>
                        <li>
                            <img src="<?php echo $detail['icon']['url']; ?>" alt="<?php echo $detail['icon']['alt']; ?>" />
                            <p><?php echo $detail['text']; ?></p>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
            <?php
            $details = $card_2['all_details']['details'];
            if ($details) { ?>
                <a href="#" class="see-all-details">See All Details</a>
            <?php } ?>
            <?php if ($card_2['all_details']) {
                $heading = $card_2['all_details']['heading'];
                $narrative = $card_2['all_details']['narrative'];
                ?>
                <div class="plan-card-all-details">
                    <div class="all-details-close"></div>
                    <div class="gradient"></div>
                    <?php if ($heading['text']) { ?>
                        <<?php echo $heading['html']; ?> style="color:<?php echo $heading['color']; ?>; font-size:<?php echo $heading['size']; ?>; font-weight:<?php echo $heading['weight']; ?>"><?php echo $heading['text']; ?></<?php echo $heading['html']; ?>>
                    <?php } ?>
                    <?php if ($narrative['text']) { ?>
                        <<?php echo $narrative['html']; ?> style="color:<?php echo $narrative['color']; ?>; font-size:<?php echo $narrative['size']; ?>; font-weight:<?php echo $narrative['weight']; ?>"><?php echo $narrative['text']; ?></<?php echo $narrative['html']; ?>>
                    <?php } ?>
                    <?php if ($details) { ?>
                        <div class="all-details-list">
                            <?php foreach ($details as $detail) { ?>
                                <div class="all-details-list-item">
                                    <h3><?php echo $detail['heading']; ?></h3>
                                    <p><?php echo $detail['narrative']; ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="gradient"></div>
        </div>
        <!--------------------------------------- Card 3 ------------------------------------>
        <div class="plan-card">
            <?php if ($card_3['heading']['text']) { ?>
                <<?php echo $card_3['heading']['html']; ?> style="color:<?php echo $card_3['heading']['color']; ?>; font-size:<?php echo $card_3['heading']['size']; ?>; font-weight:<?php echo $card_3['heading']['weight']; ?>"><?php echo $card_3['heading']['text']; ?></<?php echo $card_3['heading']['html']; ?>>
            <?php } ?>
            <?php if ($card_3['narrative']['text']) { ?>
                <<?php echo $card_3['narrative']['html']; ?> style="margin-top:10px; color:<?php echo $card_3['narrative']['color']; ?>; font-size:<?php echo $card_3['narrative']['size']; ?>; font-weight:<?php echo $card_3['narrative']['weight']; ?>"><?php echo $card_3['narrative']['text']; ?></<?php echo $card_3['heading']['html']; ?>>
            <?php } ?>
            <?php if ($card_3['price']['text']) { ?>
                <div class="plan-card-price">
                    <<?php echo $card_3['price']['html']; ?> style="margin-top:20px; color:<?php echo $card_3['price']['color']; ?>; font-size:<?php echo $card_3['price']['size']; ?>; font-weight:<?php echo $card_3['price']['weight']; ?>"><?php echo $card_3['price']['text']; ?></<?php echo $card_3['price']['html']; ?>>
                    <<?php echo $card_3['duration']['html']; ?> style="margin-top:20px; color:<?php echo $card_3['duration']['color']; ?>; font-size:<?php echo $card_3['duration']['size']; ?>; font-weight:<?php echo $card_3['duration']['weight']; ?>"><?php echo $card_3['duration']['text']; ?></<?php echo $card_3['duration']['html']; ?>>                    
                </div>
            <?php } ?>
            <?php if ($card_3['fine_print']['text']) { ?>
                <<?php echo $card_3['fine_print']['html']; ?> style="color:<?php echo $card_3['fine_print']['color']; ?>; font-size:<?php echo $card_3['fine_print']['size']; ?>; font-weight:<?php echo $card_3['fine_print']['weight']; ?>"><?php echo $card_3['fine_print']['text']; ?></<?php echo $card_3['fine_print']['html']; ?>>
            <?php } ?>
            <?php if ($card_3['button']['text']) { ?>
                <div>
                    <a href="<?php echo $card_3['button']['link']; ?>" class="button-solid-gold"><?php echo $card_3['button']['text']; ?></a>
                </div>
            <?php } ?>
            <?php if ($card_3['get_started'] == true) { ?>
                <div><a href="#" class="button-solid-gold get-started-button">Get Started</a></div>
            <?php } ?>
            <?php if ($card_3['details']) { ?>
                <ul>
                    <?php foreach ($card_3['details'] as $detail) { ?>
                        <li>
                            <img src="<?php echo $detail['icon']['url']; ?>" alt="<?php echo $detail['icon']['alt']; ?>" />
                            <p><?php echo $detail['text']; ?></p>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
            <?php
            $details = $card_3['all_details']['details'];
            if ($details) { ?>
                <a href="#" class="see-all-details">See All Details</a>
            <?php } ?>
            <?php if ($card_3['all_details']) {
                $heading = $card_3['all_details']['heading'];
                $narrative = $card_3['all_details']['narrative'];
                ?>
                <div class="plan-card-all-details">
                    <div class="all-details-close"></div>
                    <div class="gradient"></div>
                    <?php if ($heading['text']) { ?>
                        <<?php echo $heading['html']; ?> style="color:<?php echo $heading['color']; ?>; font-size:<?php echo $heading['size']; ?>; font-weight:<?php echo $heading['weight']; ?>"><?php echo $heading['text']; ?></<?php echo $heading['html']; ?>>
                    <?php } ?>
                    <?php if ($narrative['text']) { ?>
                        <<?php echo $narrative['html']; ?> style="color:<?php echo $narrative['color']; ?>; font-size:<?php echo $narrative['size']; ?>; font-weight:<?php echo $narrative['weight']; ?>"><?php echo $narrative['text']; ?></<?php echo $narrative['html']; ?>>
                    <?php } ?>
                    <?php if ($details) { ?>
                        <div class="all-details-list">
                            <?php foreach ($details as $detail) { ?>
                                <div class="all-details-list-item">
                                    <h3><?php echo $detail['heading']; ?></h3>
                                    <p><?php echo $detail['narrative']; ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="gradient"></div>
        </div>
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