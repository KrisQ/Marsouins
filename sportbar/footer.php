<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sportbars
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

		
		
			<span class="sep"></span>
			<?php printf( esc_html__( '%1$s by %2$s.', 'sportbars' ), 'sportbars', '<a href="http://gobelinzdev.com" rel="designer">GobelinzDev</a> <br> <h6>Copyrights : Marsouins.com</h6>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
