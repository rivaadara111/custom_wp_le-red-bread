<?php
/**
* Template Name: About Page
**/

get_header(); ?>

<div id="about-primary" class="content-area">
<main id="main" class="site-main" role="main">
<div class="about-container">

  <header class="about-title">
    <h1>LEARN ABOUT OUR TEAM AND CULTURE</h1>
    <p><?php echo CFS()->get(tagline); ?></p>
    <br>
    <hr class="horizontal-rule"></hr>
  </header>

  <div class="about-columns">

    <div class="copy">
      <img src="<?php bloginfo('template_directory'); ?>/images/team.jpg" class="about-img" alt="Team Photo">
      <h3>Le Red Bread Team</h3>
      <p class="caption">
        Baking up a storm every day.
      </p>
      <p><?php echo CFS()->get(team_copy); ?></p>
    </div>

    <div class="copy">
      <img src="<?php bloginfo('template_directory'); ?>/images/bakery.jpg" class="about-img" alt="LRB Bakery Photo">
      <h3>Le Red Bread Bakery</h3>
      <p class="caption">
        A home away from home.
      </p>
      <?php echo CFS()->get(bakery_copy); ?>
      </div>
  </div>   <!--end about columns div -->

  <h2>Our Story</h2>
    <?php echo CFS()->get(our_story_text); ?>

    <!-- contact us box -->
    <div class="contact-box">
      <p>
        <span>Feel free to contact us with any questions coments or suggestions. We even take custom orders!</span>
        <a href="<?php get_page_by_title('Contact')?>"><button type="submit" class="submit-button" name="submit-button">Contact Us</button></a>
      </p>

    </div>

    </div>   <!-- about container -->
  </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
