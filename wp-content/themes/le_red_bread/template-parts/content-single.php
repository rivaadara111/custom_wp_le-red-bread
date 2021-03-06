<?php
/**
 * Template part for displaying single posts.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('large'); ?>
		<?php endif; ?>
<div id="single-blog-post-title">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	</div>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content single-blog-post">
		<?php the_content(); ?>
		<?php
            wp_link_pages(array(
                'before' => '<div class="page-links">'.esc_html('Pages:'),
                'after' => '</div>',
            ));
        ?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer>
<br>
 <hr class="horizontal-rule blog">
<!-- .entry-footer -->


</article><!-- #post-## -->
