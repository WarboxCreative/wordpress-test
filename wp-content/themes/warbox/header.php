<?php
/**
 * The header for our theme.
 *
 * Displays all the <head> section and everything up till <div id="content">
 *
 * @package Warbox
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$site_url      = esc_url_raw( get_site_url() );
$the_theme     = wp_get_theme();
$theme_version = $the_theme->get( 'Version' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Favicons -->

	<!-- Preloading / Preconnecting -->
	<link rel="preconnect" href="https://www.googletagmanager.com"/>
	<link rel="preconnect" href="https://www.google-analytics.com"/>
	<link rel="preconnect" href="https://kit.fontawesome.com"/>
	<link rel="preconnect" href="https://code.jquery.com"/>
	<link rel="preconnect" href="https://cdn.jsdelivr.net"/>

	<!-- Image Preloading -->

	<?php
	wp_register_style( 'theme', esc_url_raw( get_site_url() ) . '/wp-content/themes/warbox/assets/build/css/theme.css', array(), $theme_version . '.' . filemtime( get_template_directory() . '/assets/build/css/theme.css' ), false );
	wp_enqueue_style( 'theme', '', array(), $theme_version . '.' . filemtime( get_template_directory() . '/assets/build/css/theme.css' ), false );

	wp_register_script( 'jquery36', 'https://code.jquery.com/jquery-3.6.0.min.js#crossoriginanon', array(), $theme_version . '.' . md5( 'https://code.jquery.com/jquery-3.6.0.min.js#crossoriginanon' ), false );
	wp_register_script( 'fontawesome', 'https://kit.fontawesome.com/507005261d.js#deferload#crossoriginanon', array(), $theme_version . '.' . md5( 'https://kit.fontawesome.com/507005261d.js#deferload#crossoriginanon' ), false );
	wp_register_script( 'alpine', 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js', array(), '2.0.0', false );

	wp_enqueue_script( 'jquery36' );
	wp_enqueue_script( 'fontawesome' );
	wp_enqueue_script( 'alpine' );
	?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">
	<?php do_action( 'wp_body_open' ); ?>
	<div class="site" id="page">
		<?php get_template_part( 'navbar' ); ?>
