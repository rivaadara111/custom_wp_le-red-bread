<?php
/**
 * The template for displaying product taxonomy pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

	<!-- .page-header -->
			<header class="product-type-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header>
<!-- start the loop -->
			<div class="product-types">
						 <?php while ( have_posts() ) : the_post(); ?>

						<div class="product-menu-item">
							 <?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'thumbnail' ); ?>
							 <?php endif; ?>

							 <div class="product-info">
									<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
								<p>	<?php the_content(); ?>
								<span>Price: <?php echo esc_html( CFS()->get( 'price' ) ); ?></span>
								</p>
							 </div>
						</div>

						 <?php endwhile; ?>
			</div>

			<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
