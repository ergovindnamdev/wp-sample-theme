<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Future_Bridge
 */



$event_date = get_post_meta(get_the_id(), 'event_info_date', true);

$dayDiff = dateDiffInDays($event_date, date('Y-m-d'));
?>

<article id="event-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (!is_singular()) { ?>
        <div class="event-left">
            <p class="news_date">
                <?php if ($dayDiff > 0) { ?>
                    <span class="upcoming-msg"> Upcoming on</span>
                    <span class="day">
                        <?php echo date_format(date_create($event_date), 'j'); ?>
                    </span>
                    <span class="month">
                        <?php echo date_format(date_create($event_date), 'M'); ?>
                    </span>
                    <span class="year">
                        <?php echo date_format(date_create($event_date), 'Y'); ?>
                    </span>
                <?php } ?>
            </p>
        </div>
        <?php } ?>
        <div class="event-right">
        <div class="event-content">

        <header class="entry-header">
            <?php
            if (is_singular()):
                the_title('<h1 class="entry-title">', '</h1>');
                futurebridge_post_thumbnail();
            else:
                the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
            endif;

            ?>
        </header><!-- .entry-header -->



        <div class="entry-content">
            <?php
            if (is_singular()):
                the_content(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'futurebridge'),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post(get_the_title())
                    )
                );
            else:
                the_excerpt(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'futurebridge'),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post(get_the_title())
                    )
                );
            endif;


            ?>
        </div><!-- .entry-content -->
        </div>
        <div class="event-img">
            <?php if (!is_singular()) { futurebridge_post_thumbnail(); } ?>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->