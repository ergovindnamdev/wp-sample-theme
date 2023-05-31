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

			<div class="entry-content">
				<main class="tab-container">
					<!-- <input id="tab1" type="radio" name="tabs" checked> -->
					<label for="tab1"><a href="<?php echo esc_url(home_url('/')); ?>">Overview</a></label>
					<input id="tab2" type="radio" name="tabs" checked>
					<label for="tab2">Future Bridge In News</label>
					<section id="content2">
						<div class="event-archive-posts-main">
							<div class="event-archive-posts-left">
								<?php
								if (is_active_sidebar('news-archives')) {
									?>
									<aside id="news-archives" class="widget-area ">
										<?php dynamic_sidebar('news-archives'); ?>
									</aside><!-- #secondary -->
									<?php
								}
								?>
							</div>
							<div class="event-archive-posts-right">
								<?php
								/* Start the Loop */
								while (have_posts()):
									the_post();
									?>


									<?php get_template_part('template-parts/content-news'); ?>


									<?php
									/*
									 * Include the Post-Type-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
									 */
									//get_template_part('template-parts/content', get_post_type());
							
								endwhile;
								?>
							</div>
						</div>
						<?php
						the_posts_navigation();

						?>
					</section>
				</main>
			</div><!-- .entry-content -->
			<?php

		else:

			get_template_part('template-parts/content', 'none');

		endif;
		?>

	</div><!-- #main -->

	<?php
	get_footer();