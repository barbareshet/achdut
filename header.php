<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package achdut-israel
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'achdut' ); ?></a>

	<header id="masthead" class="site-header fixed-top" role="banner">
        <div class="container-fluid" id="top-bar">
            <div class="row">
                <div class="container inner-container">
                    <div class="row inner-row">

                        <div class="col-sm-12 text-right">
                            <ul id="langs" class="list-inline">
                                <li>HE</li>
                                <li>EN</li>
                                <li>FR</li>
                                <li>ES</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
        </div>

		<nav id="site-navigation" class="main-navigation navbar navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Brand</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">main</a></li>
                        <li><a href="#about">about</a></li>
                        <li><a href="#activities">activities</a></li>
                        <li><a href="#gallery">gallery</a></li>
                        <li><a href="#blog">blog</a></li>
                        <li><a href="#contact">contact</a></li>
                    </ul>
                </div>
            </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<section id="content" class="site-content">
