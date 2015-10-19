<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */
?><!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<div id="page" class="hfeed site">

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
        <div class="navbar-header">
 			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>       
			<?php if( get_header_image() != '' ) : ?>
			<div id="logo">
				<a class="aglogo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
			</div><!-- end of #logo -->
			<?php endif; // header image was removed ?>
			<?php if( !get_header_image() ) : ?>
			<div id="logo">
				<span class="site-name"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
			</div><!-- end of #logo -->
			<?php endif; // header image was removed (again) ?>        
        </div>
        <div id="navbar" class="navbar-collapse collapse">
 			<?php sparkling_header_menu(); ?>
			<div class="navbar-form navbar-right">
<!-- 				<form> -->
<!-- 				<div class="form-group"> -->
<!-- 					<label for="zipSearch">Dealer Locator</label> -->
<!-- 					<input id="zipSearch" type="text" placeholder="Zip Code" class="form-control input-sm"> -->
<!-- 				</div> -->
<!-- 				<button type="submit" class="btn btn-sm btn-primary">Search <i class="fa fa-angle-double-right"></i></button> -->
<!-- 				</form> -->
			<a class="btn btn-default btn-sm" role="button" href="/dealer-locator/">Dealer Locator <i class="fa fa-angle-double-right"></i> </a>
			</div>      
        </div>
	</div>
</nav>

<?php if( is_home() ) { ?>
<header id="masthead" class="site-header" role="banner">
	<?php get_template_part('carousel-index'); ?>
</header><!-- #masthead -->
<?php } ?>
<main id="main" class="site-main" role="main">
