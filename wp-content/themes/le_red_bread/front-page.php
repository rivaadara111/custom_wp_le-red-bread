<?php
/**
 * The template for displaying all single blog posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


  <br>
<!-- displaying the product types dynamically todo: flexbox this shiet! -->
  <?php
    $terms = get_terms( 'product-type');
  ?>
  <?php if (! empty($terms) ) : ?>
  <?php foreach ($terms as $term) : ?>
    <img src="<?php echo get_template_directory_uri()."/images\/".$term->slug; ?>.png" alt="product types" />
    <h3><?php echo $term->name; ?></h3>
    <p><?php echo $term->description; ?> <a href='<?php echo get_term_link($term); ?>'>See More...</a>
  </p>

  <?php endforeach; ?>

  <?php endif; ?>

  <br>

  <?php
    $args = array( 'post_type' => 'post', 'numberposts' => 4 );
    $latest_posts = get_posts( $args );
  ?>
<a href="<?php echo get_term_link($term);?>"></a> <!-- to get product type to link to product type pages-->
<!-- this is the loop for dynamically populating the latest blog posts to display on the front page (not hardcoded in!) -->
  <?php  foreach( $latest_posts as $post ) : setup_postdata($post);?>

  <?php if (has_post_thumbnail() ) : ?>
    <?php the_post_thumbnail( 'original'); ?>
    <?php endif; ?>

    <h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
    <span class="entry-meta">
      <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
    </span><!-- .entry-meta -->
  <?php endforeach; wp_reset_postdata(); ?>


		</main><!-- #main -->
	</div><!-- #primary -->>
<?php get_footer(); ?>
