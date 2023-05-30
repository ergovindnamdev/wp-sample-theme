<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Future_Bridge
 */


$news_obj = new WP_Query(array('post_type' => 'news'));

if ($news_obj->have_posts()):
    while ($news_obj->have_posts()):
        $news_obj->the_post();

        $pdf_url = get_post_meta(get_the_id(), 'news_info_pdf', true);
        $short_title = get_post_meta(get_the_id(), 'news_info_short_title', true);
        $terms = get_the_terms(get_the_id(), 'news_category');
        $term = '';
        if (count($terms) > 0) {
            $term = $terms[0]->name;
        }
        ?>
        <div class="cat_name">
            <?php echo $term; ?>
        </div>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="content-left">
                <p class="news_date"><span class="date">
                        <?php echo get_the_date(' j '); ?>
                    </span><span class="date-month">
                        <?php echo get_the_date(' F Y'); ?>
                    </span></p>
                <p class="short_title">
                    <?php echo $short_title; ?>
                </p>
            </div>
            <div class="content-right">
                <header class="entry-header">
                    <?php //the_title('<h6 class="entry-title">', '</h6>'); 
                the_title('<h6 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h6>');
                    
                    ?>
                </header>

                <div class="entry-content">
                    <?php the_excerpt(); ?>
                    <div class="entry-content-footer">
                        <?php if ($pdf_url != '') { ?>
                            <a class="download" target="_blank" href="<?php echo $pdf_url; ?>"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/download-img.png"></a>
                        <?php } ?>
                        <a class="read-more" href="<?php the_permalink(); ?>">Read More </a>
                    </div>
        </article>
    <?php endwhile;
    the_posts_navigation();
else:
    $short_html .= "<div>No Data Available</div>";
endif;
wp_reset_postdata();
?>