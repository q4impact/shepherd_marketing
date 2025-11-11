<?php
function blankie_scripts()
  {
      // Deregister the jquery version bundled with WordPress.
    	wp_deregister_script( 'jquery' );
      // Enqueue Jquery
      wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.0.js', array(), '3.5.0', false );
      // Enqueue Theme Scripts
      wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0', true );
      // Enqueue slick header Scripts
      wp_enqueue_script( 'header', get_template_directory_uri() . '/js/header.js', array( 'jquery' ), '1.0', true );
      // Plan Cards
      wp_enqueue_script( 'plan-cards', get_template_directory_uri() . '/js/plan-cards.js', true );
      // Heading Narrative
      wp_enqueue_script( 'heading-narrative', get_template_directory_uri() . '/js/heading-narrative.js', true );
      // Inc
      wp_enqueue_script( 'inc', get_template_directory_uri() . '/js/inc.js', true );
      // FAQ
      wp_enqueue_script( 'faq', get_template_directory_uri() . '/js/faq.js', true );
  }

add_action('init', 'blankie_scripts'); // Add Scripts
