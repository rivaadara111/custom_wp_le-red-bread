<?php
/**
 * The template for displaying all single blog posts.
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
    $terms = get_terms('product-type');
  ?>

<div class="flex-product-type-home">
  <?php if (!empty($terms)) : ?>
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
      <a href="<?php echo esc_url(home_url('/products'));?>"><button name="see-products-button">See Our Products</button></a>
  </p>    <!-- //above link is not working!!!!!!!!!!-->
  </div>
  <br>

<!-- the loop for dynamically populating the latest blog posts-->
  <div class="latest-news">
  <h2>Our Latest News</h2>
      <hr class="horizontal-rule"></hr>
    <div class="blog-post-container">
    <?php
      $args = array('post_type' => 'post', 'numberposts' => 4);
      $latest_posts = get_posts($args);
    ?>

    <?php  foreach ($latest_posts as $post) : setup_postdata($post);?>

    <div class="blog-post">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('original'); ?>
        <?php endif; ?>

        <h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
        <span class="entry-meta">
          <?php red_starter_posted_on(); ?> / <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
        </span><!-- .entry-meta -->
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </div>   <!--  end latest news div -->

  <div class="reviews-section">
    <h3>what others say about us</h3>
    <hr class="horizontal-rule"></hr>
      <div class="reviews-container">

        <div class="review-block">
          <img src="<?php echo get_template_directory_uri().'/images/testimonial-headshots/dr-dosist-headshot.png';?>" alt="Dr. Dosist Headshot" />
          <div class="review-text">
            <p class="testimonial">
              Healthy food be damned! If you are a bakery and sweet addict like myself this place is life changing. So many goodies. Have a cheat day and eat all the pretzels!
            </p>
            <p>
              <span>Dr. Doist</span><br>
              Nutritionist - <a href="http://www.redacademy.com">Health Time Clinic</a>
            </p>
          </div>
        </div>

        <div class="review-block">
          <img src="<?php echo get_template_directory_uri().'/images/testimonial-headshots/maxi-milli-headshot.png';?>" alt="Maxi Milli Headshot" />
          <div class="review-text">
            <p class="testimonial">
            Do you like bread? Seriously, who doesn't? You have to check Le Red Bread's lovely loaves. Fresh flavours every day...need I say more?
            </p>
            <p>
              <span>Maxi Milli</span><br>
              Chef - <a href="http://www.redacademy.com">Sailor Spoon</a>
            </p>
          </div>
        </div>

        <div class="review-block">
          <img src="<?php echo get_template_directory_uri().'/images/testimonial-headshots/ana-vandana-headshot.png';?>" alt="Anna Vandana Headshot" />
          <div class="review-text">
            <p class="testimonial">
              Excellent cookies! They always have unique flavours and the cookies are always super fresh. Make sure you get them before they sell out! And keep an eye out on holidays, the flavour combinations they come up with are brilliant. Delicious!
            </p>
            <p>
              <span>Anna Vandana</span><br>
              Author - <a href="http://www.redacademy.com">Food is Great Magazine</a>
            </p>
          </div>
        </div>

        <div class="review-block">
          <img src="<?php echo get_template_directory_uri().'/images/testimonial-headshots/martha-m-masters-headshot.png';?>" alt="Martha M. Masters Headshot" />
          <div class="review-text">
            <p class="testimonial">
              Where has this bakery been all my life! I absolutely love their cookies and muffins. Nom nom.
            </p>
            <p>
              <span>Martha M. Masters</span><br>
              Food Critic - <a href="http://www.redacademy.com">WikiTravel</a>
            </p>
          </div>
        </div>

      </div>
  </div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
