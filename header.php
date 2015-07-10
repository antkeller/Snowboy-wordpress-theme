<?php
/**
 * The Header for our theme
 *
 * @package WordPress
 * @subpackage Snowboy-Productions-WordPress-Theme
 */
?><!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head id="snowboy-productions-website" data-template-set="snowboy-productions-wordpress-theme">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="author" content="Snowboy Productions" />
	<meta name="Copyright" content="Copyright Snowboy Productions <?php echo date('Y'); ?>. All Rights Reserved." />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="keywords" content="snowboy, productions, events, snowboarding, skateboarding, surfing, skiing, rad, northwest, boardsport, shred" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="google-site-verification" content="XXXXXXXX" />
	<?php if (is_search()) echo "\t" . '<meta name="robots" content="noindex, nofollow" />' . "\n"; ?>
	<meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:url" content="<?php the_permalink(); ?>" />
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/_/img/social-share.jpg" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="Snowboy Productions" />
	<meta itemprop="name" content="<?php wp_title( '|', true, 'right' ); ?>" />
	<meta itemprop="description" content="<?php bloginfo('description'); ?>" />
	<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/_/img/social-share.jpg" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/_/img/favicon.ico" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/_/img/apple-icon-precomposed.png" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php include '_/inc/header-includes.php' ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/_/js/lib/respond-1.4.2.min.js"></script>
	<![endif]-->
	<!-- WordPress Head -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper" class="container-fluid">
		<header id="header" role="banner">
			<div class="social-header">
				<ul>
	        <li><a href="https://instagram.com/snowboyproductions/" target="_blank"><span class="instagram"></span></a></li>
	        <li><a href="https://www.facebook.com/SNOWBOYproductions" target="_blank"><span class="facebook"></span></a></li>
	        <li><a href="https://twitter.com/snowboyus" target="_blank"><span class="twitter"></span></a></li>
	      </ul>
			</div>
			<a id="primary-navigation" class="menu-toggle">
			  <span>toggle menu</span>
			</a>
			<div class="main-header-wrapper">
				<nav id="nav" class="primary-navigation" role="navigation">
					<?php wp_nav_menu( array('menu' => 'primary') ); ?>
				</nav>
				<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/_/img/snowboy-logo.png" /></a></h1>
				<div class="site-description">
					<h3>Making shit radder today than it was yesterday... <span>since 1997.</span></h3>
				</div>
			</div><!--.main-header-wrapper -->
		</header>
