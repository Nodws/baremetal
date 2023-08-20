<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
 

	function baremetal_setup() {
	 

			register_nav_menus( [ 'head' => __( 'Header', 'baremetal' ) ] );
			register_nav_menus( [ 'foot' => __( 'Footer', 'baremetal' ) ] );
	
			add_theme_support( 'post-thumbnails' );
			add_theme_support( 'title-tag' );
			add_theme_support(
				'html5',
				[
					'search-form',
					'comment-form',
					'comment-list',
					'gallery',
					'caption',
					'script',
					'style',
				]
			);
			add_theme_support(
				'custom-logo',
				[
					'height'      => 100,
					'width'       => 350,
					'flex-height' => true,
					'flex-width'  => true,
				]
			);

	 
			// all actions related to emojis
			remove_action( 'admin_print_styles', 'print_emoji_styles' );
			remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
			remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
			remove_action( 'wp_print_styles', 'print_emoji_styles' );
			remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
			remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
			remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

			// filter to remove TinyMCE emojis
			add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
			add_filter( 'wp_calculate_image_srcset', '__return_false' );
	
		}


		// Disable login modals introduced in WordPress 3.6
		remove_action( 'admin_enqueue_scripts', 'wp_auth_check_load' );

		// Disable useless bloat
		remove_action( 'wp_head', 'rsd_link' );
		remove_action( 'wp_head', 'wlwmanifest_link' );
		remove_action( 'wp_head', 'wp_generator' );
		remove_action( 'wp_head', 'start_post_rel_link' );
		remove_action( 'wp_head', 'index_rel_link' );
		remove_action( 'wp_head', 'adjacent_posts_rel_link' );
		remove_action( 'wp_head', 'wp_shortlink_wp_head' );
	}
add_action( 'after_setup_theme', 'baremetal_setup' );
	
	function baremetal_scripts_styles() {	
			wp_enqueue_style('baremetal',get_template_directory_uri() . '/style.css',[], 420);
	
	}
add_action( 'wp_enqueue_scripts', 'baremetal_scripts_styles' );


	function baremetal_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'baremetal_content_width', 800 );
	}
add_action( 'after_setup_theme', 'baremetal_content_width', 0 );
