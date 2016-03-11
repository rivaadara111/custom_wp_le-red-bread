<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	return $classes;
}
add_filter( 'body_class', 'lrb_classes' );

//filter archive post loops to be alphabetically, 12 posts per page:
//set up a function to modify the archive loop that takes the $query as an argument
//first set up a if statement that checks if its looping the right posts -->  if ( is_post_type_archive(array('product')) && !is_admin() && query->is_main_query()){
//(are you in the product archive page? is_post_type_archive is a built in WP function),
//accepts an array as an arg and then pass in the item you are checking, then checking
//your not looking in the admin area, then checking if were dealing with the main query or not.
// pass query object in as a paramater in this function. it has methods and props we can set.
//we're going to first set a property on the query object to order them by title $query->set( 'orderby', 'title');
//then say we want them alphabetically: $query->set('order', 'ASC');
//then say we want 12 posts per page: $query->set('posts_per_page', 12);
function lrb_modify_archive_loop($query){
	if ( is_post_type_archive(array('product')) && !is_admin() && $query->is_main_query()){
		$query->set( 'orderby', 'title');
		$query->set('order', 'ASC');
		$query->set('posts_per_page', 12);
	}

}
add_action( 'pre_get_posts','lrb_modify_archive_loop' );

//stretch goal: create custom loop of tsetimonials. gotta make a custom post type called testimonials though. and then create some custom fields with the object too.

//link login page header image to site url

function the_url(){
	return home_url();
}
add_filter( 'login_headerurl', 'the_url');

//make custom login page header url

function lrb_login_logo() {
    echo '<style type="text/css">
        h1 a {
            background-image: url('.get_template_directory_uri().'/images/lrb-logo.svg) !important;
						background-size: contain !important;
						width: 100% !important;}
    </style>';
  }
add_action( 'login_head', 'lrb_login_logo' );

//get titles to show no taxonomy title
function lrb_archive_title( $title ) {
    if ( is_post_type_archive( array( 'product') ) ) {
        $title = 'Our Products Are Made Fresh Daily';
    } elseif ( is_tax( 'product-type' ) ) {
        $title = single_term_title( '', false );
    }
    return $title;
}
    add_filter( 'get_the_archive_title', 'lrb_archive_title' );


//add a read-more link after each blog post
function lrb_wp_trim_excerpt( $text ) {
    $raw_excerpt = $text;

    if ( '' == $text ) {
        // retrieve the post content
        $text = get_the_content('');

        // delete all shortcode tags from the content
        $text = strip_shortcodes( $text );

        $text = apply_filters( 'the_content', $text );
        $text = str_replace( ']]>', ']]&gt;', $text );

        // indicate allowable tags
        $allowed_tags = '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
        $text = strip_tags( $text, $allowed_tags );

        // change to desired word count
        $excerpt_word_count = 50;
        $excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count );

        // create a custom "more" link
        $excerpt_end = '<span>[...]</span><p><a href="' . get_permalink() . '" class="read-more">Read more &rarr;</a></p>'; // modify excerpt ending
        $excerpt_more = apply_filters( 'excerpt_more', ' ' . $excerpt_end );

        // add the elipsis and link to the end if the word count is longer than the excerpt
        $words = preg_split( "/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );

        if ( count( $words ) > $excerpt_length ) {
            array_pop( $words );
            $text = implode( ' ', $words );
            $text = $text . $excerpt_more;
        } else {
            $text = implode( ' ', $words );
        }
    }
    return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
}

remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
add_filter( 'get_the_excerpt', 'lrb_wp_trim_excerpt' );
