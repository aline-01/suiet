<?php
define('IS_DEVELOPER',true);
if (IS_DEVELOPER){
    define('SUIET_VERSION_2',time());
}else{
    define('SUIET_VERSION_2','2.0.0');
}
require_once get_theme_file_path('inc/sidebar.php');
require_once get_theme_file_path('inc/menu.php');
require_once get_theme_file_path('inc/breadcrumb.php');
require_once get_theme_file_path('inc/comments.php');
require_once get_theme_file_path('inc/custom_post_type.php');
require_once get_theme_file_path('inc/cusom_post_type_blog.php');

if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */

if ( ! function_exists( 'suiet_setup' ) ) :

    function suiet_setup() {

        load_theme_textdomain( 'suiet', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'woocommerce' );
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );



        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
		'secondary' => __('Secondary Menu', 'myfirsttheme' ),
	) );


	add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'suiet_setup' );
 function suiet_add_theme_style(){
     wp_enqueue_style('swiper',get_theme_file_uri('/assets/css/swiper.css'),[],'4.3.3');
     wp_enqueue_style('hover',get_theme_file_uri('/assets/css/hover-min.css'),[],'2.3.2');
     wp_enqueue_style('font-awesome',get_theme_file_uri('/assets/css/all.min.css'),[],'5.11.2');
     wp_enqueue_style('slick',get_theme_file_uri('/assets/css/slick.css'),[],'SUIET_VERSION_2');
     wp_enqueue_style('slick-theme',get_theme_file_uri('/assets/css/slick-theme.css'),['slick'],'SUIET_VERSION_2');
     wp_enqueue_style('bootstrap',get_theme_file_uri('/assets/css/bootstrap.min.css'),[],'4.3.1');
     if(is_rtl()){
         wp_enqueue_style('bootstrap-rtl',get_theme_file_uri('/assets/css/bootstrap-rtl.css'),['bootstrap'],'4.3.1');
     }

     wp_enqueue_style('style',get_theme_file_uri('/assets/css/style.css'),['bootstrap', ],'1.12.1');

 }
add_action( 'wp_enqueue_scripts', 'suiet_add_theme_style' );
function suiet_add_theme_scripts() {

    wp_enqueue_script('swiper',get_theme_file_uri('/assets/js/swiper.js'),['jquery'],'4.3.3',true);
    wp_enqueue_script('popper',get_theme_file_uri('/assets/js/popper.min.js'),['jquery'],'4.3.1',true);
    wp_enqueue_script('bootstrap',get_theme_file_uri('/assets/js/bootstrap.min.js'),['jquery', 'popper'],'4.3.1',true);
    wp_enqueue_script('slick',get_theme_file_uri('/assets/js/slick.min.js'),['jquery'],'SUIET_VERSION_2',true);
    wp_enqueue_script('font-awesome',get_theme_file_uri('/assets/js/all.min.js'),[],'5.11.2',true);
    wp_enqueue_script('main',get_theme_file_uri('/assets/js/main.js'),['jquery','slick','bootstrap','swiper'],'SUIET_VERSION_2',true);



    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'suiet_add_theme_scripts' );
function suiet_html_class_list(){
    $array_class_list=apply_filters('suiet_html_class_list',[]);
    $class_list=implode('',$array_class_list);
    echo sprintf('class="%s"',$class_list);

}
 function suiet_get_last_category($post_id)
 {
     $categories = get_the_category($post_id);
     if (count($categories) > 0) {
         $category = (isset($categories[0])) ? $categories[0] : false;
         if (isset($category->name)) {
             return $category->name;
         }
     }
     return '';
 }
?>