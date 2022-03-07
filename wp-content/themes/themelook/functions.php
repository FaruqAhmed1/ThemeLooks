<?php

define('THEME_VERSION', rand());

function themelooks_bootstrapping(){
    load_theme_textdomain("themelooks");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    register_nav_menu( "topmenu", __("Top Mennu", "themelooks"));
    register_nav_menu( "footermenu", __("Footer Mennu", "themelooks"));
   
    
}
add_action("after_setup_theme","themelooks_bootstrapping");

//Enqueue assets
function load_theme_style(){
    //load css
    if(!is_admin()){

        wp_enqueue_style( "main", get_stylesheet_uri() );
        wp_enqueue_style( "icon", get_theme_file_uri("assets/img/fav.png") );
        wp_enqueue_style( "shortcut-icon", get_theme_file_uri("assets/img/fav.png") );
        wp_enqueue_style( "fonts-googleapis", "//fonts.googleapis.com/css?family=Barlow:300,400,500,700%7CWork+Sans:400,500,700&display=swap" );
        wp_enqueue_style( "bootstrap", get_theme_file_uri("assets/css/bootstrap.min.css"));
        wp_enqueue_style( "font-awesome", get_theme_file_uri("assets/css/font-awesome.min.css") );
        wp_enqueue_style( "owlcarousel", get_theme_file_uri("assets/plugins/owlcarousel/owl.carousel.min.css") );
        wp_enqueue_style( "megnipic-popup", get_theme_file_uri("assets/plugins/megnipic-popup/magnific-popup.css"));
        wp_enqueue_style( "style-css", get_theme_file_uri("assets/css/style.css") );
        wp_enqueue_style( "custom-css", get_theme_file_uri("assets/css/custom.css") );
        
    }
    //load js
    if(!is_admin()){
        
        wp_enqueue_script( 'bootstrap-bundle-js', get_theme_file_uri("assets/js/bootstrap.bundle.min.js") , array("jquery"), THEME_VERSION, true );
        wp_enqueue_script( 'waypoints-js', get_theme_file_uri("assets/js/jquery.waypoints.min.js") , array("jquery"), THEME_VERSION, true );
        wp_enqueue_script( 'owlcarousel-js', get_theme_file_uri("assets/plugins/owlcarousel/owl.carousel.min.js") , array("jquery"), THEME_VERSION, true );
        wp_enqueue_script( 'countdown-timer-js', get_theme_file_uri("assets/plugins/countdown-timer/countdown.min.js") , array("jquery"), THEME_VERSION, true );
        wp_enqueue_script( 'megnipic-popup-js', get_theme_file_uri("assets/plugins/megnipic-popup/jquery.magnific-popup.min.js")  , array("jquery"), THEME_VERSION, true );
        wp_enqueue_script( 'retinajs', get_theme_file_uri("assets/plugins/retinajs/retina.min.js")  , array("jquery"), THEME_VERSION, true );
        wp_enqueue_script( 'menu-js', get_theme_file_uri("assets/js/menu.min.js")  , array("jquery"), THEME_VERSION, true );
        wp_enqueue_script( 'main-js', get_theme_file_uri("assets/js/main.js")  , array("jquery"), THEME_VERSION, true );
        wp_enqueue_script( 'custom-js', get_theme_file_uri("assets/js/custom.js")  , array("jquery"), THEME_VERSION, true );
        
    }
}
add_action( 'wp_enqueue_scripts', 'load_theme_style' );

// nav-bar extra css
function themelooks_menu_item_class($classes,$item){
    $classes[]= "list-inline-item";
    return $classes;
}
add_filter("nav_menu_css_class","themelooks_menu_item_class",10,2);

// register widget
function themelooks_sidebar(){
    register_sidebar( array(
        'name'          => __( 'Footer post sidebar ', 'themelooks' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Right sidebar', 'alpha' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    

}
add_action("widgets_init","themelooks_sidebar");

//register widgets

include get_template_directory() . '/elementor/elementor.php';

