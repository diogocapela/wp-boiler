<?php
// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';





function zd_theme_setup() {


	// add support for thumbnail images in posts for this theme
	add_theme_support('post-thumbnails');


	// wp-bootstrap-navwalker
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
	));
}



// actions are used to create something (lifecycle?)
add_action('after_setup_theme', 'zd_theme_setup');


// Excerpt Length Control

function set_excerpt_length() {
	return 45;
}


// filters are used to edit something
add_filter('excerpt_length', 'set_excerpt_length');


// widget locations

function zd_init_widgets($id) {

	// para qualquer widget location vamos sempre usar o register_sidebar, mesmo q nao seja uma sidebar


	register_sidebar(array(
		'name' => 'Sidebar',
		'id'   => 'sidebar',
		'before_widget' => '<div class="sidebar-item">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));




}


add_action('widgets_init', 'zd_init_widgets');



?>