<?php
$facebook_url = get_field('settings_footer_facebook_url', 'option');
$linkedin_url = get_field('settings_footer_linkedin_url', 'option');
$x_url = get_field('settings_footer_x_url', 'option');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
		<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
		<?php wp_head(); ?>
	</head>


	<body>
		<div id="page-wrapper">
			<div class="page-gradient"></div>
			<header class="clearfix">
				<div class="inner-wrapper clearfix">
					<div id="menu-toggle"></div>
					<div id="header-logo">
						<a href="<?php echo get_home_url(); ?>"><?php echo get_template_part('inc/header-logo'); ?></a>
					</div>
					<?php blankie_nav(); ?>
					<div id="header-social">
						<?php if ($facebook_url) { ?><a href="<?php echo $facebook_url; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/svg/icon-facebook-white.svg" /></a><?php } ?>
						<?php if ($linkedin_url) { ?><a href="<?php echo $linkedin_url; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/svg/icon-linkedin-white.svg" /></a><?php } ?>
						<?php if ($x_url) { ?><a href="<?php echo $x_url; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/svg/icon-x-white.svg" /></a><?php } ?>
					</div>
				</div>
			</header>