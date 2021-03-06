<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tabula_Rasa
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="wrapper">
		<div class="footer-top">
		<div class="wrapper">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'tabula_rasa_tabularasa' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'tabula_rasa_tabularasa' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'tabula_rasa_tabularasa' ), 'tabula_rasa_tabularasa', '<a href="http://third-law.com">Third Law Web Design</a>' );
				?>
		</div><!-- .site-info -->
		</div><!-- end .wrapper -->
		</div><!-- end .footer-top -->
		<div class="footer-bottom">
		<div class="wrapper">
		</div><!-- end .wrapper -->
		</div><!-- end .footer-bottom -->
		
		</div><!-- end .wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
