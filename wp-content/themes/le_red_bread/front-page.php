<?php
/**
 * The template for displaying all single blog posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="frontpage" class="front-content-area">
		<main id="fontpage" class="frontsite-main" role="main">
<!-- herobanner -->
    <div class="banner">
    <h1>baked to perfection.</h1>
    </div>
  <br>

<!-- product types row  -->
  <?php
    $terms = get_terms( 'product-type');
  ?>

<div class="flex-product-type-home">
  <?php if (! empty($terms) ) : ?>
  <?php foreach ($terms as $term) : ?>
  <div class="product-box-home">
    <img src="<?php echo get_template_directory_uri()."/images\/".$term->slug; ?>.png" alt="product types" />
    <h3><?php echo $term->name; ?></h3>
    <p><?php echo $term->description; ?> <a href="<?php echo get_term_link($term); ?>">See More...</a></p>
  </div>
  <?php endforeach; ?>
</div>
  <?php endif; ?>

  <!-- contact us box -->
  <div class="see-products-box">
    <p>
      <span>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</span>
      <a href="<?php the_permalink($products)?>"><button type="submit" name="see-products-button">See Our Products</button></a>
    </p>
  </div>
  <br>

<!-- the loop for dynamically populating the latest blog posts-->
  <div class="latest-news">
  <h2>Our Latest News</h2>
      <hr class="horizontal-rule"></hr>
    <div class="blog-post-container">
    <?php
      $args = array( 'post_type' => 'post', 'numberposts' => 4 );
      $latest_posts = get_posts( $args );
    ?>

    <?php  foreach( $latest_posts as $post ) : setup_postdata($post);?>

    <div class="blog-post">
      <?php if (has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'original'); ?>
        <?php endif; ?>

        <h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
        <span class="entry-meta">
          <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
        </span><!-- .entry-meta -->
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>

  <!-- <a href="<?php echo get_term_link($term);?>"></a> to get product type to link to product type pages--> -->
