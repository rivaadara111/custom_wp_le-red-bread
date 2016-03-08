<?php
/**
* Template Name: About Page
**/

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
  <h1>LEARN ABOUT OUR TEAM AND CULTURE</h1>
  <p><?php echo CFS()->get(tagline); ?></p>

  <div class="copy">
  <?php echo CFS()->get(team_copy); ?>
  </div>
  <div class="copy">
  <?php echo CFS()->get(bakery_copy); ?>
  </div>
  <?php echo CFS()->get(our_story_text); ?>
  <h2>Our Story</h2>
    <?php echo CFS()->get(our_story_text); ?>




  </main><!-- #main -->
  </div><!-- #primary -->


<?php get_footer(); ?>
