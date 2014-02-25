<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package XYZ
 */
?>
		</div><!-- .row -->

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="row">

			<div class="small-12 columns site-info">
				<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'xyz' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'xyz' ), 'XYZ', '<a href="http://zeek.com" rel="designer">Steve Zehngut</a>' ); ?>
			</div><!-- .site-info -->

		</div><!-- .row -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>