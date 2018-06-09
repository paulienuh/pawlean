<?php

add_theme_support( 'post-thumbnails' );
the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
the_post_thumbnail('large');           // Large resolution (default 640px x 640px max)
the_post_thumbnail('full');   

function change_wp_search_size($query) {
    if ( $query->is_search ) // Make sure it is a search page
        $query->query_vars['posts_per_page'] = -1; // Change 10 to the number of posts you would like to show

    return $query; // Return our modified query variables
}
add_filter('pre_get_posts', 'change_wp_search_size'); // Hook our custom function onto the request filter

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { 
	wp_enqueue_script( 'comment-reply' ); 
}

add_action( 'wp_enqueue_scripts');

add_filter( 'wpseo_remove_reply_to_com', '__return_false' );

?>
