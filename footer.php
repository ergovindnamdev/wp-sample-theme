<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Future_Bridge
 */

?>
	</main>
	</div>
	<footer id="futurebridge-footer" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'futurebridge' ) ); ?>">
				<?php
				
				printf( esc_html__( 'Proudly powered by %s', 'futurebridge' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'futurebridge' ), 'futurebridge', '<a href="http://www.futurebridge.com">Future Bridge</a>' );
				?>
		</div>
	</footer><!-- #colophon -->

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/holder.min.js"></script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
