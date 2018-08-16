
<?php

// Dynamically add CSS to pages
function startwordpress_scripts() {
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array() );
  wp_enqueue_style( 'skeleton', get_template_directory_uri() . '/css/skeleton.css', array() );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array() );
}
add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// WordPress Titles
add_theme_support( 'title-tag' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Support Custom Menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Support Widgets
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'arphabet_widgets_init' );
