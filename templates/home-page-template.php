<?php
/**
 * Template Name: Home Page Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Future_Bridge
 */

get_header();

get_template_part('template-parts/content-carousel');

global $post;
?>
<main id="primary"class="main-container">
<div id="primary-main" class="site-main container-left">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content">
            <main class="tab-container">
                <input id="tab1" type="radio" name="tabs" checked>
                <label for="tab1">Overview</label>
                <!-- <input id="tab2" type="radio" name="tabs"> -->
                <label for="tab2"><a href="<?php echo esc_url( home_url( '/' )); ?>newss" >Future Bridge In News</a></label>

                <section id="content1">
                    <?php echo get_the_content($post->ID); ?>
                </section>

                <!-- <section id="content2">
                    <?php //get_template_part('template-parts/content-news'); ?>

                </section> -->
            </main>
        </div><!-- .entry-content -->
    </article>
</div><!-- #main -->
<?php
get_sidebar();

get_footer();
 