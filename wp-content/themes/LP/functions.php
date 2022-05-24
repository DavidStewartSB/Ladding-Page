

<?php

//include get_template_directory_uri() . '/custom_post_type/learning.php';

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	include_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Register Menus
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'LP-desafio' ),
) );
?>