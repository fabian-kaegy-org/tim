<?php
/**
 * function.php
 *
 * @package Tim
 */

namespace fabiankaegy\tim;

add_action( 'init', __NAMESPACE__ . '\enqueue_frontend_assets' );

/**
 * Enqueue frontend assets
 */
function enqueue_frontend_assets() {

	if ( is_page_template( 'templates/van-pdf.php' ) ) {
		wp_enqueue_style(
			'van-pdf-styles',
			get_template_directory_uri() . '/templates/van-pdf.css',
			[],
			'1.0.0'
		);
	};
}
