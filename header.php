<?php
/**
 * The Header for our theme
 *
 * @package WordPress
 * @subpackage MervinMfg-WordPress-Theme-Template
 * @since Mervin Mfg WordPress Theme Template 1.0.0
 */
?><!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head id="mervinmfg-template" data-template-set="mervinmfg-wordpress-theme-template">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="keywords" content="XXXXXXXXXX" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="google-site-verification" content="XXXXXXXXXX" />
<?php if (is_search()) echo "\t" . '<meta name="robots" content="noindex, nofollow" />' . "\n"; ?>
	<meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:url" content="<?php the_permalink(); ?>" />
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/_/img/social-icon.png" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="XXXXXXXXXX" />
	<meta itemprop="name" content="<?php wp_title( '|', true, 'right' ); ?>" />
	<meta itemprop="description" content="<?php bloginfo('description'); ?>" />
	<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/_/img/social-icon.png" />
	<!-- <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/_/img/favicon.ico" /> -->
	<!-- <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/_/img/apple-icon-precomposed.png" /> -->
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
		<header id="header" class="row" role="banner">
			<div class="social-header col-xs-6">
				<ul>
	        <li><a href="https://instagram.com/snowboyproductions/" target="_blank"><span class="instagram"></span></a></li>
	        <li><a href="https://www.facebook.com/SNOWBOYproductions" target="_blank"><span class="facebook"></span></a></li>
	        <li><a href="https://twitter.com/snowboyus" target="_blank"><span class="twitter"></span></a></li>
	      </ul>
			</div>
			<a id="primary-navigation" class="menu-toggle">
			  <span>toggle menu</span>
			</a>
			<nav id="nav" class="primary-navigation col-xs-12 col-sm-7 col-sm-push-5 col-md-8 col-md-push-4 col-lg-9 col-lg-push-3" role="navigation">
				<?php wp_nav_menu( array('menu' => 'primary') ); ?>
			</nav>
			<h1 class="col-xs-12 col-sm-5 col-sm-pull-7 col-md-4 col-md-pull-8 col-lg-3 col-lg-pull-9"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/_/img/snowboy-logo.png" /></a></h1>
			<div class="site-description col-xs-12 col-sm-7 col-sm-push-5 col-md-8 col-md-push-4 col-lg-9 col-lg-push-3">
				<h3>Making shit radder than it was yesterday... <span>since 1997.</span></h3>
			</div>
		</header>
