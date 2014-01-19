<?php
if (class_exists('MultiPostThumbnails')) {
        new MultiPostThumbnails(
            array(
                'label' => 'Secondary Image',
                'id' => 'secondary-image',
                'post_type' => 'post'
            )
        );
        new MultiPostThumbnails(
            
            array(
                'label' => 'Third Image',
                'id' => 'third-image',
                'post_type' => 'post'
            )
        );
}

function register_my_menu() {
  register_nav_menus(array(
	'header-menu' => 'Header Menu',
	'about-menu' => 'About Menu',
    'work-menu' => 'Work Menu'
));
}
add_action( 'init', 'register_my_menu' );

/*function add_menuclass($ulclass) {
	return preg_replace('/<a /', '<a class="nav_text"', $ulclass, 1);
}
add_filter('wp_nav_menu','add_menuclass');*/
if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}
?>
