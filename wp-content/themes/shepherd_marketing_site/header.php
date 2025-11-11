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
					<div id="header-logo">
						<?php echo get_template_part('inc/header-logo'); ?>
					</div>
					<?php blankie_nav(); ?>
				</div>
			</header>