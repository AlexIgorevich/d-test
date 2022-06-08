<?php
/**
 * Config Dizzain WordPress Theme Class
 */

namespace App\Controllers;

use App\Helpers\Init;
use App\Helpers\Theme;

final class DizzainTheme extends Theme implements Init {

	public static function init() {
		self::addSupport( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		) );
		self::addSupport( 'custom-logo' );
		self::addSupport( 'post-thumbnails', array( 'post', 'solution', 'portfolio' ) );
		self::addNavMenus(
			array(
				'primary' => esc_html__( 'Main header menu', DIZZAIN_TEXTDOMAIN )
			)
		);

		if ( function_exists( 'acf_add_options_page' ) ) {

			acf_add_options_page( array(
				'page_title' => 'Theme General Settings',
				'menu_title' => 'Theme Settings',
				'menu_slug'  => 'theme-general-settings',
				'capability' => 'edit_posts',
				'redirect'   => false
			) );
		}

		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueueAssets' ) );
	}

	public static function enqueueAssets(): void {
		wp_enqueue_style( 'dizzain', get_template_directory_uri() . '/dist/css/app.css', array(), _S_VERSION );
		wp_enqueue_script( 'dizzain', get_template_directory_uri() . '/dist/js/app.js', array(), _S_VERSION, true );
	}
}