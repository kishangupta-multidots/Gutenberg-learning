<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?> style="margin-top: 0 !important;">

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel='stylesheet' id='dashicons-css'  href='style.css' media='all' />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+KR:wght@100;300;500;600;700&family=Raleway:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<header id="site-header" class="header-footer-group" role="banner">
			<div class="header-top">
				<div class="container">
					<ul>
						<li><a href="#">407.459.8800</a></li>
						<li><a href="#">Apply Now </a></li>
						<li><a href="#">Resident Login </a></li>
						<li><a href="#">Schedule A Tour</a></li>
					</ul>
				</div>
			</div>
			<div class="header-bottom">
				<div class="container">
					<div class="main-menu">
						<div class="site-logo">
							<a href="#" class="color-logo"><img src="<?php  echo get_template_directory_uri() . '/assets/images/logo.svg' ?>" alt="site logo"></a>
							<a href="#" class="white-logo"><img src="<?php  echo get_template_directory_uri() . '/assets/images/logo-white.svg' ?>" alt="site logo"></a>
						</div>
						<div class="site-main-menu">
							<ul class="main-menu-list">
								<li><a href="#">Floorplans</a>
									<ul class="sub-menu">
										<li><a href="#">Availability</a></li>
										<li><a href="#">One Bedroom</a></li>
										<li><a href="#">Two Bedroom</a></li>
										<li><a href="#">Three Bedroom</a></li>
									</ul>
								</li>
								<li><a href="#">Amenities</a></li>
								<li><a href="#">Gallery</a></li>
								<li><a href="#">FAQs</a></li>
								<li><a href="#">Neighborhood</a></li>
								<li><a href="#">Contact</a></li>
								
							</ul>
						</div>
						<div class="moblie-menu">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
				</div>
			</div>

			

		</header><!-- #site-header -->

		<?php

