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
		<title>VWT5 Buspläne</title>
		<meta property="og:title" content="VWT5 Buspläne" />
		<meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() . '/images/van.jpg' ); ?>" />

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="site">
			<img width="360" height="240" class="hero-image" src="<?php echo esc_url( get_template_directory_uri() . '/images/van.jpg' ); ?>" alt="" />

			<main class="site-content">
				<h1 class="page-title"><span class="page-title__highlight">VWT5</span><br/>Buspläne</h1>

				<p>Ich hoffe mit den folgenden Plänen und Materiallisten kann ich dir bei der Umsetzung deines Bus-Projekts helfen und dir einiges an Arbeit sparen!</p>

				<img class="mockup" height="450" src="<?php echo esc_url( get_template_directory_uri() . '/images/van-pdf-mockup.png' ); ?>" alt="" />

				<a class="button__link" href="<?php echo esc_url( get_post_meta( get_the_ID(), 'pdf_url', true ) ); ?>" download target="_blank">Download</a>
			</main>

		</div>
		<?php wp_footer(); ?>
	</body>
</html>
