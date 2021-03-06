<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoestrap
 */

?>

	</div><!-- #content -->

	<?php do_action( 'shoestrap/footer/before' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'shoestrap' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'shoestrap' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'shoestrap' ), 'shoestrap', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php do_action( 'shoestrap/footer/after' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>
<script>
jQuery( function() {
	jQuery( document ).foundation();
} );
</script>
</body>
</html>
