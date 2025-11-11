<?php
// Setup block ID and class
$id = 'contact-form-' . $block['id'];
$className = 'block-contact-form';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
$heading = get_field('heading');
$narrative = get_field('narrative');
$subhead = get_field('subhead');
$phone = get_field('phone');
$phone_heading = $phone['heading'];
$phone_number = $phone['number'];
$email = get_field('email');
$email_heading = $email['heading'];
$email_address = $email['address'];
$message = get_field('message');
$message_heading = $message['heading'];
$message_narrative = $message['narrative'];
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="contact-form-container inner-wrapper">
        <div class="gradient"></div>
        <div class="contact-form-text">
            <?php if ($heading['text']) { ?>
                <<?php echo esc_html($heading['html']); ?> style="color:<?php echo esc_html($heading['color']); ?>; font-size:<?php echo esc_html($heading['size']); ?>; font-weight:<?php echo esc_html($heading['weight']); ?>"><?php echo esc_html($heading['text']); ?></<?php echo esc_html($heading['html']); ?>>
            <?php } ?>
            <?php if ($subhead['text']) { ?>
                <<?php echo esc_html($subhead['html']); ?> style="color:<?php echo esc_html($subhead['color']); ?>; font-size:<?php echo esc_html($subhead['size']); ?>; font-weight:<?php echo esc_html($subhead['weight']); ?>"><?php echo esc_html($subhead['text']); ?></<?php echo esc_html($subhead['html']); ?>>
            <?php } ?>
            <?php if ($narrative['text']) { ?>
                <<?php echo esc_html($narrative['html']); ?> style="margin-top:20px; color:<?php echo esc_html($narrative['color']); ?>; font-size:<?php echo esc_html($narrative['size']); ?>; font-weight:<?php echo esc_html($narrative['weight']); ?>"><?php echo esc_html($narrative['text']); ?></<?php echo esc_html($narrative['html']); ?>>
            <?php } ?>
            <div class="contact-form-phone">
                <img src="<?php echo $phone['icon']['url']; ?>" alt="<?php echo $phone['icon']['alt']; ?>" />
                <?php if ($phone_heading['text']) { ?>
                    <<?php echo esc_html($phone_heading['html']); ?> style="margin-top:10px; color:<?php echo esc_html($phone_heading['color']); ?>; font-size:<?php echo esc_html($phone_heading['size']); ?>; font-weight:<?php echo esc_html($phone_heading['weight']); ?>"><?php echo esc_html($phone_heading['text']); ?></<?php echo esc_html($phone_heading['html']); ?>>
                <?php } ?>
                <?php if ($phone_number['text']) { ?>
                    <a href="phone:<?php echo $phone_number['text']; ?>" style="color:<?php echo esc_html($phone_number['color']); ?>">
                        <<?php echo esc_html($phone_number['html']); ?> style="margin-top:5px; color:<?php echo esc_html($phone_number['color']); ?>; font-size:<?php echo esc_html($phone_number['size']); ?>; font-weight:<?php echo esc_html($phone_number['weight']); ?>"><?php echo esc_html($phone_number['text']); ?></<?php echo esc_html($phone_number['html']); ?>>
                    </a>
                <?php } ?>
            </div>
            <div class="contact-form-email">
                <img src="<?php echo $email['icon']['url']; ?>" alt="<?php echo $email['icon']['alt']; ?>" />
                <?php if ($email_heading['text']) { ?>
                    <<?php echo esc_html($email_heading['html']); ?> style="margin-top:10px; color:<?php echo esc_html($email_heading['color']); ?>; font-size:<?php echo esc_html($email_heading['size']); ?>; font-weight:<?php echo esc_html($email_heading['weight']); ?>"><?php echo esc_html($email_heading['text']); ?></<?php echo esc_html($email_heading['html']); ?>>
                <?php } ?>
                <?php if ($email_address['text']) { ?>
                    <a href="mailto:<?php echo $email_address['text']; ?>" style="color:<?php echo esc_html($email_address['color']); ?>">
                        <<?php echo esc_html($email_address['html']); ?> style="margin-top:5px; color:<?php echo esc_html($email_address['color']); ?>; font-size:<?php echo esc_html($email_address['size']); ?>; font-weight:<?php echo esc_html($email_address['weight']); ?>"><?php echo esc_html($email_address['text']); ?></<?php echo esc_html($email_address['html']); ?>>
                    </a>
                <?php } ?>
            </div>
            <div class="contact-form-message">
                <?php if ($message_heading['text']) { ?>
                    <<?php echo esc_html($message_heading['html']); ?> style="margin-top:10px; color:<?php echo esc_html($message_heading['color']); ?>; font-size:<?php echo esc_html($message_heading['size']); ?>; font-weight:<?php echo esc_html($message_heading['weight']); ?>"><?php echo esc_html($message_heading['text']); ?></<?php echo esc_html($message_heading['html']); ?>>
                <?php } ?>
                <?php if ($message_narrative['text']) { ?>
                    <<?php echo esc_html($message_narrative['html']); ?> style="margin-top:10px; color:<?php echo esc_html($message_narrative['color']); ?>; font-size:<?php echo esc_html($message_narrative['size']); ?>; font-weight:<?php echo esc_html($message_narrative['weight']); ?>"><?php echo esc_html($message_narrative['text']); ?></<?php echo esc_html($message_narrative['html']); ?>>
                <?php } ?>
            </div>
        </div>
        <div class="contact-form-form">
            <?php echo do_shortcode('[wpforms id="941" title="false"]'); ?>
        </div>

    </div>
</section>