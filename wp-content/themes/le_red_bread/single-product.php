<?php
/**
 * The template for displaying all single products.
 */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
    <div class="individual-products">
		<?php while (have_posts()) : the_post(); ?>
	    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	    	<header class="entry-header">
	      	<?php if (has_post_thumbnail()) : ?>
	      		<?php the_post_thumbnail('large'); ?>
	      	<?php endif; ?>
	    	</header>
	      <div class="entry-content">
	  			Price: <?php echo CFS()->get('price'); ?>
	      	<p><?php the_content(); ?></p>
	    	</div>
	    </article>
			<?php endwhile;?>
    </div>
	</main>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
