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

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Activate the first element of each card tab group on the page //
    const featureTabGroups = document.querySelectorAll('.feature-tab-group');
    featureTabGroups.forEach(function (featureTabGroup) {
        const nav = featureTabGroup.querySelector('.feature-tab-group-nav');
        const firstNavItem = nav.firstElementChild;
        firstNavItem.classList.add('active');
        const firstTab = featureTabGroup.querySelector('.feature-tab-group-tab');
        firstTab.classList.add('active');
        const text = firstTab.querySelector('.feature-tab-group-tab-text');
        text.classList.add('active');
        const image = firstTab.querySelector('.feature-tab-group-tab-image');
        image.classList.add('active');
    });
    // Click handler for nav //
    const featureTabNav = document.querySelectorAll('.feature-tab-group-nav-item');
    featureTabNav.forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            // Remove active from siblings //
            const siblings = btn.parentElement.querySelectorAll('.feature-tab-group-nav-item');
            siblings.forEach(function (el) { el.classList.remove('active'); });
            // Add active to this button //
            btn.classList.add('active');
            // Display the tab and hide the others //
            const index = btn.getAttribute('data-index');
            const id = btn.getAttribute('data-id');
            const parent = document.getElementById(id);
            const tabs = parent.querySelectorAll('.feature-tab-group-tab');
            tabs.forEach(function (el) {
                 const elIndex = el.getAttribute('data-index');
                 if (elIndex == index) {
                     el.classList.add('active');
                     const text = el.querySelector('.feature-tab-group-tab-text');
                    text.classList.add('active');
                    const image = el.querySelector('.feature-tab-group-tab-image');
                    image.classList.add('active');
                 } else {
                     el.classList.remove('active');
                 }
             });
        });
    });
});
</script>