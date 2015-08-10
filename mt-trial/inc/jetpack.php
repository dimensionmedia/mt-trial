<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package MT-Trial
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function mt_trial_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'mt_trial_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function mt_trial_jetpack_setup
add_action( 'after_setup_theme', 'mt_trial_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function mt_trial_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function mt_trial_infinite_scroll_render
