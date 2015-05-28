<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="theme-color" content="#3B6E9B">
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600|Roboto:300,700,400' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/zepto/1.1.4/zepto.min.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="darkband" id="darkband-header"></div>
<div id="wrapper" class="hfeed">
<div id="lightband"></div>
<header id="header" role="banner">
<section id="branding">
<div class="logo" onclick="goHome();"></div><div id="site-title"><?php if ( ! is_singular() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'cssa' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( ! is_singular() ) { echo '</h1>'; } ?></div>
</section>
<nav id="menu" role="navigation">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
<div id="search">
<?php get_search_form(); ?>
</div>
</nav>
</header>
<div id="container">