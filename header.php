<?php 

namespace fabiankaegy\tim;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
};

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"> 
	<meta name="theme-color" content="#ebf0f2" media="(prefers-color-scheme: light)">
	<meta name="theme-color" content="#454949" media="(prefers-color-scheme: dark)">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
