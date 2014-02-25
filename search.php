<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package XYZ
 */

get_header(); ?>

	<section id="primary" class="medium-9 columns content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'xyz' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>

			<div class="row">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				// Add a row break every 2 posts
				if ( (($count % 2) == 0) && ($count > 0) ) echo '</div><!-- .row --><div class="row">';
				$count++;
				?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			</div><!-- .row -->

			<?php xyz_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
