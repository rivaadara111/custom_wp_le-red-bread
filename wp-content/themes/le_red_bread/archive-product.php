<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="product-content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

<!-- .page-header -->
		<header class="product-header">
			<h1>OUR PRODUCTS ARE MADE FRESH DAILY</h1>
			<p>We are a team of creative and talented individuals who love making delicious treats.</p>
			<br>

			<hr class="horizontal-rule"></hr>

			<?php
		    $terms = get_terms( 'product-type');
		  ?>

			<div class="flex-product-type">
			  <?php if (! empty($terms) ) : ?>
			  <?php foreach ($terms as $term) : ?>
				<div class="product-box">
					<a href='<?php echo get_term_link($term); ?>'>
				  	<img src="<?php echo get_template_directory_uri()."/images\/".$term->slug; ?>.png" alt="product types" />
				  	<h3><?php echo $term->name; ?></h3>
					</a>
				</div>
				<?php endforeach; ?>
			</div>
				<?php endif; ?>
		</header>

			<?php /* Start the Loop */ ?>
			<div class="product-grid">
			<?php while ( have_posts() ) : the_post(); ?>

			<!-- CREATE A PRODUCT SQUARE -->
			<div class="product-square">
      <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'original' ); ?>
      <?php endif; ?>
			<div class="product-data">
      <?php the_title(); ?>
      <span><?php echo CFS()->get( 'price' ); ?>
			</span></div>
			</div>
			<?php endwhile; ?>
			</div>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
