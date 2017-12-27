<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Soroka-kiev
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Bootstrap CSS -->
		
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome Icons -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
				
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>   

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	
	<header class="site-header" role="banner">
			
			<!-- Navbar -->
			
			<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
		        <div class="container-fluid">
		            <!-- Brand and toggle get grouped for better mobile display -->
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand page-scroll" href="https://soroka-kiev.com">Soroka</a>
		            </div>

		            <!-- Collect the nav links, forms, and other content for toggling -->
		            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		                <ul class="nav navbar-nav navbar-right">
		                    <li><a class="page-scroll" href="https://soroka-kiev.com/#services">Услуги</a></li>
		                    <li><a class="page-scroll" href="https://soroka-kiev.com/#price">Цены</a></li>
							<li><a class="page-scroll" href="https://soroka-kiev.com/#gallery">Галерея</a></li>
		                    <li><a class="page-scroll" href="https://soroka-kiev.com/#contact">Контакты</a></li>
		                    <li><a class="page-scroll" href="https://soroka-kiev.com/blog">Блог</a></li>
		                </ul>
		            </div>
		            <!-- /.navbar-collapse -->
		        </div>
		        <!-- /.container-fluid -->
    		</nav>
			
		</header>