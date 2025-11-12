<?php
function blankie_scripts()
  {
      // Deregister the jquery version bundled with WordPress.
    	wp_deregister_script( 'jquery' );
      // Enqueue Jquery
      wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.0.js', array(), '3.5.0', false );
      // Enqueue Theme Scripts
      wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), filemtime(get_theme_file_path('/js/scripts.js')), true );
      // Enqueue slick header Scripts
      wp_enqueue_script( 'header', get_template_directory_uri() . '/js/header.js', array( 'jquery' ), filemtime(get_theme_file_path('/js/header.js')), true );
      // Plan Cards
      wp_enqueue_script( 'plan-cards', get_template_directory_uri() . '/js/plan-cards.js',  filemtime(get_theme_file_path('/js/plan-cards.js')), true );
      // Heading Narrative
      wp_enqueue_script( 'heading-narrative', get_template_directory_uri() . '/js/heading-narrative.js', filemtime(get_theme_file_path('/js/heading-narrative.js')), true );
      // Inc
      wp_enqueue_script( 'inc', get_template_directory_uri() . '/js/inc.js', filemtime(get_theme_file_path('/js/inc.js')), true );
      // FAQ
      wp_enqueue_script( 'faq', get_template_directory_uri() . '/js/faq.js', filemtime(get_theme_file_path('/js/faq.js')), true );
      // Card Tab Group
      wp_enqueue_script( 'card-tab-group', get_template_directory_uri() . '/js/card-tab-group.js', filemtime(get_theme_file_path('/js/card-tab-group.js')), true );
      // Feature Tab Group
      wp_enqueue_script( 'feature-tab-group', get_template_directory_uri() . '/js/feature-tab-group.js', filemtime(get_theme_file_path('/js/feature-tab-group.js')), true );
  }

add_action('init', 'blankie_scripts'); // Add Scripts
