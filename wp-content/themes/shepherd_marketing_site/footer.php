<?php
$demo_heading = get_field('settings_footer_demo_heading', 'option');
$demo_narrative = get_field('settings_footer_demo_narrative', 'option');
$facebook_url = get_field('settings_footer_facebook_url', 'option');
$linkedin_url = get_field('settings_footer_linkedin_url', 'option');
$x_url = get_field('settings_footer_x_url', 'option');
// $menu_1 = get_field('settings_footer_menu_1', 'option');
// $menu_1_items = $menu_1['menu_items'];
// $menu_2 = get_field('settings_footer_menu_2', 'option');
// $menu_2_items = $menu_2['menu_items'];
// $menu_3 = get_field('settings_footer_menu_3', 'option');
// $menu_3_items = $menu_3['menu_items'];
$menu_1 = get_field('settings_footer_menu_1', 'option') ?: [];
$menu_1_items = $menu_1['menu_items'] ?? [];

$menu_2 = get_field('settings_footer_menu_2', 'option') ?: [];
$menu_2_items = $menu_2['menu_items'] ?? [];

$menu_3 = get_field('settings_footer_menu_3', 'option') ?: [];
$menu_3_items = $menu_3['menu_items'] ?? [];
?>
			<footer>
				<div class="inner-wrapper clearfix" id="footer-top">
					<div id="footer-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/svg/shepherd-logo-horizontal-inverted.svg" />
					</div>
					<p>Site-Specific Hazard Awareness Training</p>
				</div>
				<div id="footer-mid" class="inner-wrapper clearfix">
					<div id="footer-mid-nav" class="clearfix">
						<div class="footer-mid-nav-col">
							<?php if (!empty($menu_1['heading'])) { ?><h3><?php echo $menu_1['heading']; ?></h3><?php } ?>
							<?php if (!empty($menu_1_items)) {
								foreach ($menu_1_items as $item) { ?>
									<a href="<?php echo $item['link']; ?>"><?php if ($item['label']) { echo $item['label']; } ?></a>
								<?php } ?>
							<?php } ?>
						</div>
						<div class="footer-mid-nav-col">
							<?php if (!empty($menu_2['heading'])) { ?><h3><?php echo $menu_2['heading']; ?></h3><?php } ?>
							<?php if (!empty($menu_2_items)) {
								foreach ($menu_2_items as $item) { ?>
									<a href="<?php echo $item['link']; ?>"><?php if ($item['label']) { echo $item['label']; } ?></a>
								<?php } ?>
							<?php } ?>
						</div>
						<div class="footer-mid-nav-col">
							<?php if (!empty($menu_3['heading'])) { ?><h3><?php echo $menu_3['heading']; ?></h3><?php } ?>
							<?php if (!empty($menu_3_items)) {
								foreach ($menu_3_items as $item) { ?>
									<a href="<?php echo $item['link']; ?>"><?php if ($item['label']) { echo $item['label']; } ?></a>
								<?php } ?>
							<?php } ?>
						</div>
					</div>
					<div id="footer-mid-demo">
						<h3><?php if ($demo_heading) { echo $demo_heading; } ?></h3>
						<p><?php if ($demo_narrative) { echo $demo_narrative; } ?></p>
						<div id="footer-demo-input">
							<?php echo do_shortcode('[wpforms id="1236" title="false"]'); ?>
							
						</div>
					</div>
				</div>
				<div class="inner-wrapper clearfix" id="footer-bottom">
					<p id="footer-copyright"><?php echo "&copy; " . date('Y'); ?> <a href="https://www.q4impact.com/" target="_blank">Q4 Impact Group</a>. All rights reserved.</p>
					<div id="footer-social" class="clearfix">
						<?php if ($facebook_url) { ?><a href="<?php echo $facebook_url; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/svg/icon-facebook-white.svg" /></a><?php } ?>
						<?php if ($linkedin_url) { ?><a href="<?php echo $linkedin_url; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/svg/icon-linkedin-white.svg" /></a><?php } ?>
						<?php if ($x_url) { ?><a href="<?php echo $x_url; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/svg/icon-x-white.svg" /></a><?php } ?>
					</div>
				</div>
				<div id="footer-gradient"></div>
			</footer>
			<?php get_template_part('inc/demo-video'); ?>
		</div><!-- / Page Wrapper -->
		<?php wp_footer(); ?>
	</body>
</html>
