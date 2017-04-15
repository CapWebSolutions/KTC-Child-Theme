<?php
/**
 * Bootcamp Teaser
 *
 * Template Name: Bootcamp Teaser
 *
 * @package     KnowTheCode\BootcampTeaser
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://UpTechLabs.io
 * @license     GNU General Public License 2.0+
 */
namespace KnowTheCode\BootcampTeaser;

remove_all_actions( 'genesis_entry_header' );
remove_all_actions( 'genesis_entry_footer' );
remove_action( 'genesis_before_header', 'KnowTheCode\Structure\render_hello_bar', 9 );
remove_action( 'genesis_before_header', 'KnowTheCode\Structure\render_utility_bar' );
remove_action( 'genesis_after_header', 'KnowTheCode\Structure\render_sub_nav', 12 );
remove_action( 'genesis_after_header', 'KnowTheCode\Structure\render_main_nav' );

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
/**
 * Enqueue the specific assets for this template, as there's no load it on every
 * single page.
 *
 * @since 1.0.0
 *
 * @return void
 */
function enqueue_assets() {
	wp_enqueue_style( 'ktc_bootcamp_css', CHILD_URL . '/assets/dist/css/bootcamp-teaser.min.css', array(), '1.0.1' );
	wp_enqueue_script( 'ktc_front_page_js', CHILD_URL . '/assets/dist/js/jquery.front-page.min.js', array('jquery'), '1.6.5', true );
}

add_action( 'genesis_header', __NAMESPACE__ . '\render_main_nav', 11 );
/**
 * Render navigation.
 *
 * @since 1.3.0
 *
 * @return void
 */
function render_main_nav() {
	$user_is_logged_in = is_user_logged_in();

	require_once( CHILD_THEME_DIR . '/lib/structure/views/front-page-main-nav.php' );
}

genesis();