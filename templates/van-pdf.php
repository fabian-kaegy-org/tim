<?php
/**
 * Template Name: VAN PDF
 *
 * @package Tim
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"> 

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="site">
			<img class="hero-image" src="<?php echo esc_url( get_template_directory_uri() . '/images/van.jpg' ); ?>" alt="" />

			<h1>VW T5 Pläne</h1>

			<img height="200" width="500" src="<?php echo esc_url( get_template_directory_uri() . '/images/van-pdf-mockup.png' ); ?>" alt="" />

			<a href="<?php echo esc_url( get_post_meta( get_the_ID(), 'pdf_url', true ) ); ?>" download>Download</a>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
