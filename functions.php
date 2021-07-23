<?php
/**
 * function.php
 *
 * @package Tim
 */

namespace fabiankaegy\tim;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_frontend_assets', 99 );

add_filter( 'jetpack_sharing_counts', '__return_false', 99 );
add_filter( 'jetpack_implode_frontend_css', '__return_false', 99 );
add_action( 'after_setup_theme', __NAMESPACE__ . '\add_theme_supports' );
\add_filter(
	'allowed_block_types_all',
	function ( $allowed_blocks, $context ) {

		if ( 'templates/van-pdf.php' === get_page_template_slug( $context->post->ID ) ) {
			return [ 'core/paragraph' ];
		}

		return $allowed_blocks;
	},
	20,
	2
);


/**
 * add theme supports
 */
function add_theme_supports() {
	add_theme_support( 'post-thumbnails' );
}

/**
 * Enqueue frontend assets
 */
function enqueue_frontend_assets() {

	wp_dequeue_script( 'jquery' );
	wp_dequeue_style( 'jetpack_css' );
	wp_dequeue_script( 'wp-mediaelement' );
	wp_dequeue_style( 'wp-mediaelement' );

	wp_register_style(
		'normalize.css',
		get_template_directory_uri() . '/normalize.css',
		[],
		'8.0.1'
	);

	wp_register_style(
		'van-pdf-styles',
		get_template_directory_uri() . '/templates/van-pdf.css',
		[ 'normalize.css' ],
		filemtime( get_template_directory() . '/templates/van-pdf.css' )
	);

	if ( is_page_template( 'templates/van-pdf.php' ) ) {
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
		wp_enqueue_style( 'van-pdf-styles' );
	};
}
