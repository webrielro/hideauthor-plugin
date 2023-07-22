<?php
/**
 * Plugin Name: Hide Author Profiles
 * Description: Hides user WordPress profiles and redirects author profile links.
 * Version: 2.0
 * Author: Webriel
 */

 function custom_author_redirect() {
    if ( is_author() ) {
        global $wp_query;

        // Get the queried author object
        $author = $wp_query->get_queried_object();

        // Check if the author has the "Hidden Author" role
        if ( in_array( 'hidden_author', (array) $author->roles ) ) {
            // Redirect to a custom URL when accessing the author profile
            wp_redirect( 'https://wwww.exampleurl.com' );
            exit;
        }
    }
}
add_action( 'template_redirect', 'custom_author_redirect' );