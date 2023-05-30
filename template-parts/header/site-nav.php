<?php
/**
 * Displays the site navigation.
 *
 * @package Future_Bridge
 */

?>
<div class="header-right ">
<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="site-navigation" class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'futurebridge' ); ?>">
		<!-- <div class="menu-button-container">
			<button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
				<span class="dropdown-icon open"><?php esc_html_e( 'Menu', 'futurebridge' ); ?>
					<span class="navbar-toggler-icon"></span>
				</span>
				<span class="dropdown-icon close"><?php esc_html_e( 'Close', 'futurebridge' ); ?>
				<span class="navbar-toggler-icon"></span>
				</span>
			</button>
		</div> -->
		<div id="main-menu">
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'menu_class'      => 'menu-wrapper',
					'container_class' => 'primary-menu-container',
					'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
					'fallback_cb'     => false,
				)
			);
			?>
		</div>
	</nav><!-- #site-navigation -->
	<?php
endif; ?>
</div>
