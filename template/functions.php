<?php
register_nav_menu( 'primary', 'Primary Menu' );
register_nav_menu( 'secondary', 'Secondary Menu' );
register_nav_menu( 'tertiary', 'Tertiary Menu' );
register_nav_menu( 'quaternary', 'Quaternary Menu' );
register_sidebar(array(
                'name'            => 'Sidebar Rechts',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	));
register_sidebar(array(
                'name'            => 'Menu Main',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	));
register_sidebar(array(
                'name'            => 'Suche',
		'before_widget' => '<div id="%1$s" class="topwidget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="topwidgettitle">',
		'after_title' => '</h3>',
	));
register_sidebar(array(
                'name'            => 'Newsletter',
		'before_widget' => '<div id="%1$s" class="topwidget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="topwidgettitle">',
		'after_title' => '</h3>',
	));
add_filter( 'body_class', 'my_neat_body_class');
function my_neat_body_class( $classes ) {   
    if ( is_page('') )   
         $classes[] = '';   
    if ( is_page() )    
         $classes[] = '';   
    if ( is_page() )    
         $classes[] = '';
    return $classes;
}
add_action( 'wp_enqueue_script', 'load_jquery' );
function load_jquery() {
    wp_enqueue_script( 'jquery' );
}

function template_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'grid', get_template_directory_uri().'/stylesheets/grid.css' );

	wp_enqueue_style( 'fonts', get_template_directory_uri().'/fonts/' );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true );
	wp_enqueue_script( 'flowtype', get_template_directory_uri() . '/js/flowtype.js', array(), '1.0.0', true );
	wp_enqueue_script( 'selectivizr', get_template_directory_uri() . '/js/selectivizr.js', array(), '1.0.0', true );
	wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/respond.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'template_scripts' );
 function load_fonts() {
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Titillium+Web:600');
            wp_enqueue_style( 'googleFonts');
        } 
    add_action('wp_print_styles', 'load_fonts');
?>