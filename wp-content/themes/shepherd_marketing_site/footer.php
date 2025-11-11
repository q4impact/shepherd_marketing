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
							<h3>Product</h3>
							<a href="<?php echo get_home_url(); ?>/features">Features</a>
							<a href="<?php echo get_home_url(); ?>/plans">Plans & Pricing</a>
						</div>
						<div class="footer-mid-nav-col">
							<h3>Company</h3>
							<a href="<?php echo get_home_url(); ?>/about">About</a>
							<a href="<?php echo get_home_url(); ?>/contact">Contact</a>
						</div>
						<div class="footer-mid-nav-col">
							<h3>Resources</h3>
							<a href="<?php echo get_home_url(); ?>/frequently-asked-questions">FAQs</a>
							<a href="<?php echo get_home_url(); ?>/privacy-policy">Privacy Policy</a>
							<a href="<?php echo get_home_url(); ?>/terms-and-conditions">Terms & Conditions</a>
						</div>
					</div>
					<div id="footer-mid-demo">
						<h3>Request a Demo</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
						<div id="footer-demo-input">
							<input type="text" placeholder="you@youremail.com" />
							<a href="#" id="footer-demo-submit"></a>
						</div>
					</div>
				</div>
				<div class="inner-wrapper clearfix" id="footer-bottom">
					<p id="footer-copyright"><?php echo "&copy; " . date('Y'); ?> <a href="https://www.q4impact.com/" target="_blank">Q4 Impact Group</a>. All rights reserved.</p>
					<div id="footer-social" class="clearfix">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/svg/icon-facebook-white.svg" /></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/svg/icon-linkedin-white.svg" /></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/svg/icon-x-white.svg" /></a>
					</div>
				</div>
				<div id="footer-gradient"></div>
			</footer>
			<?php get_template_part('inc/demo-video'); ?>
		</div><!-- / Page Wrapper -->
		<?php wp_footer(); ?>
	</body>
</html>
