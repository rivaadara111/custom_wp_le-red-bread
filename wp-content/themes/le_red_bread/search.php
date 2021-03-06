<?php
/**
 * The template for displaying search results pages.
 */
get_header(); ?>
<section id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
			<?php if (have_posts()) : ?>
				<header class="page-header-search">
					<h1 class="page-title"><?php printf(esc_html('Search Results for: %s'), '<span>'.get_search_query().'</span>'); ?></h1>
				</header><!-- .page-header -->
				<?php /* Start the Loop */ ?>
				<?php while (have_posts()) : the_post(); ?>
			<div class="page-content">
				<?php get_template_part('template-parts/content', 'search'); ?> <!-- only searches content in the template parts?-->
			</div>
				<?php endwhile; ?>
				<?php red_starter_numbered_pagination(); ?>
			<?php else : ?>
				<?php get_template_part('template-parts/content', 'none'); ?>
			<?php endif; ?>
	</main><!-- #main -->
</section><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
