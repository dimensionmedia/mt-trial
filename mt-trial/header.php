<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MT-Trial
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<header>

	    <nav class="navbar navbar-default">
	      
			<div class="container">
	        
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url() ); ?>"><h1><?php bloginfo( 'name' ); ?></h1></a>
	        </div>

			<?php wp_nav_menu(
			  array(
			      'theme_location' => 'primary',
			      'container_class' => 'collapse navbar-collapse',
			      'container_id' => 'bs-example-navbar-collapse-1',
			      'menu' => 'top_menu',
			      'depth' => 1,
			      'menu_class' => 'nav navbar-nav navbar-right',
			      'fallback_cb' => '',
			      'menu_id' => 'header-menu-1',
			      'walker' => new wp_bootstrap_navwalker()
			  )
			); ?>



	      	</div><!-- /.container -->

	    </nav>

	</header>