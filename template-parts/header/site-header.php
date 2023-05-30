<?php
/**
 * Displays the site header.
 *
 * @package Future_Bridge
 */

$wrapper_classes = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= (true === get_theme_mod('display_title_and_tagline', true)) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu('primary') ? ' has-menu' : '';
?>
<div class="header-wrapper">
	<header id="header" class="<?php echo esc_attr($wrapper_classes); ?>">
		<div class="header-main header-body">
			<div class="header-container container">
				<?php get_template_part('template-parts/header/site-branding'); ?>
				<?php get_template_part('template-parts/header/site-nav'); ?>
			</div>
	</header>
</div>