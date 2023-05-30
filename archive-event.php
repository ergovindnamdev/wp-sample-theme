<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Future_Bridge
 */

get_header();

get_template_part('template-parts/content-carousel');
?>

<main id="primary" class="main-container">
<div id="primary-main" class="site-main container-full">

	<?php if (have_posts()): ?>

		<header class="page-header">
			<?php
			the_archive_title('<h1 class="page-title">', '</h1>');
			?>
		</header><!-- .page-header -->
		<?php
		if (is_active_sidebar('event-subscriber')) {
			?>
				<aside id="event-subscriber" class="widget-area ">
					<?php dynamic_sidebar('event-subscriber'); ?>
				</aside><!-- #secondary -->	
			<?php
		}
		
		/* Start the Loop */
		while (have_posts()):
			the_post();

			/*
			 * Include the Post-Type-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
			 */
			get_template_part('template-parts/content', get_post_type());

		endwhile;

		the_posts_navigation();

	else:

		get_template_part('template-parts/content', 'none');

	endif;
	?>

</div><!-- #main -->
<?php
get_footer();