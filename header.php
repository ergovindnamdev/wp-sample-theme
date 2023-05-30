<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Future_Bridge
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head> 
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

<!-- Custom styles for this template -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/carousel/carousel.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/my-custom-css.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content-area" class="">
