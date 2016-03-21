<?php
/**
 * The template for displaying archive pages.
 */
get_header(); ?>
<div id="primary" class="product-content-area">
	<main id="main" class="site-main" role="main">
	<?php if (have_posts()) : ?>
		<header class="product-header">
			<h1>our products are made fresh daily</h1>
			<p>We are a team of creative and talented individuals who love making delicious treats.</p>
			<br>
			<hr class="horizontal-rule">
			<?php
        $terms = get_terms('product-type');
      ?>
			<div class="flex-product-type">
			  <?php if (!empty($terms)) : ?>
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
		<div class="product-grid">
			<?php while (have_posts()) : the_post(); ?>
			<div class="product-square">
				<a href="<?php echo the_permalink($product);?>">
		      <?php if (has_post_thumbnail()) : ?>
			      <?php the_post_thumbnail('original'); ?>
			    <?php endif; ?>
				</a>
				<div class="product-data">
		      <span class="product-title"><?php the_title(); ?></span>
					<span class="price"><?php echo CFS()->get('price'); ?></span>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
				<?php the_posts_navigation(); ?>
		<?php else : ?>
		<?php endif; ?>
	</main>
</div>
<?php get_footer(); ?>
