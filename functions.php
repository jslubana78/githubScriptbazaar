<?php
/* Enqueue Styles */
if ( ! function_exists('thr_enqueue_styles') ) {
    function thr_enqueue_styles() {
        wp_enqueue_style( 'twenty-twenty-three-style', get_template_directory_uri() .'/style.css' );
    }
    add_action('wp_enqueue_scripts', 'thr_enqueue_styles');
}

function create_shortcode(){
    return "<h2>Hello world ! change1 from amendshortcode</h2>";
}
add_shortcode('my_shortcode', 'create_shortcode');

function postslider(){
    $html = '';

    $html .= '<div class="postSlider">';
    $html .= '<section class="regular slider">
    <div class="single-slide">
      <img src="http://placehold.it/350x300?text=1">
    </div>
    <div class="single-slide">
      <img src="http://placehold.it/350x300?text=2">
    </div>
    <div class="single-slide">
      <img src="http://placehold.it/350x300?text=3">
    </div>
    <div class="single-slide">
      <img src="http://placehold.it/350x300?text=4">
    </div>
    <div class="single-slide">
      <img src="http://placehold.it/350x300?text=5">
    </div>
    <div class="single-slide">
      <img src="http://placehold.it/350x300?text=6">
    </div>
  </section>';
    $html .= '</div>';

    return $html;
}
// add_shortcode('postslider', 'postslider');

// echo get_stylesheet_directory_uri().'/slick/custom.css';

//adding style and script for post slider
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'post-slider-slick', get_stylesheet_directory_uri().'/slick/slick.css' );
    wp_enqueue_style( 'post-slider-slick-theme', get_stylesheet_directory_uri().'/slick/slick-theme.css' );
    wp_enqueue_style( 'post-slider', get_stylesheet_directory_uri().'/slick/custom.css',[], rand(1,100) );
    wp_enqueue_script( 'post-slider-jquery', '//code.jquery.com/jquery-2.2.0.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'post-slider', get_stylesheet_directory_uri() . '/slick/slick.js', array('post-slider-jquery'), '1.0.0', true );
    wp_enqueue_script( 'post-slider-custom', get_stylesheet_directory_uri() . '/slick/custom.js', array('post-slider'), rand(1,100), true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
