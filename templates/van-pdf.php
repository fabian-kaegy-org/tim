<?php
/**
 * Template Name: VAN PDF
 *
 * @package Tim
 */

$page_title = wp_strip_all_tags( get_the_title() );

?>

<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
		<title><?php echo esc_html( $page_title ); ?></title>
		<meta property="og:title" content="<?php echo esc_html( $page_title ); ?>" />
		<meta property="og:image" content="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" />

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="site">
			<img width="360" height="240" class="hero-image" src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="" />

			<main class="site-content">
				<h1 class="page-title"><?php the_title(); ?></h1>

				<?php the_content(); ?>

				<img class="mockup" height="450" width="450" src="<?php echo esc_url( get_template_directory_uri() . '/images/van-pdf-mockup.jpg' ); ?>" alt="" />

				<a class="button__link" href="<?php echo esc_url( get_post_meta( get_the_ID(), 'pdf_url', true ) ); ?>" download target="_blank">Download</a>
			</main>

		</div>
		<?php wp_footer(); ?>
	</body>
</html>
