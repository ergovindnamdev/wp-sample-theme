<?php
/**
 * Displays header site branding
 *
 * @package Future_Bridge
 */

$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>



<div class="header-left site-branding">
<div class="site-logo">
	<?php if ( $blog_info ) : ?>
		<?php if ( has_custom_logo() && $show_title ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php the_custom_logo(); ?></a>
		<?php else : ?>
			<h1 class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></h1>	
		<?php endif; ?>		
	<?php endif; ?>
</div>
</div><!-- .site-branding -->
