<?php

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function add_menuclass($ulclass) {
return preg_replace('/<a /', '<a class="nav_text"', $ulclass, 1);
}
add_filter('wp_nav_menu','add_menuclass');

?>