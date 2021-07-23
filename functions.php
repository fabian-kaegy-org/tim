<?php
/**
 * function.php
 *
 * @package Tim
 */

namespace fabiankaegy\tim;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_frontend_assets', 99 );

/**
 * Enqueue frontend assets
 */
function enqueue_frontend_assets() {

	wp_dequeue_script( 'jquery' );
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'jetpack_css' );

	wp_register_style(
		'normalize.css',
		get_template_directory_uri() . '/normalize.css',
		[],
		'8.0.1'
	);

	// if ( is_page_template( 'templates/van-pdf' ) ) {
		wp_enqueue_style(
			'van-pdf-styles',
			get_template_directory_uri() . '/templates/van-pdf.css',
			[ 'normalize.css' ],
			filemtime( get_template_directory() . '/templates/van-pdf.css' )
		);
	// };
}
