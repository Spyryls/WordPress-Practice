<?php 

function watermark_files() {
    
    wp_enqueue_style("custom_font", "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
    wp_enqueue_style("font-awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    
    if(strstr($_SERVER['SERVER_NAME'], 'fictional-university.local')){
        wp_enqueue_script('main-uni-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    } else {
        wp_enqueue_script("our-vendor-js", get_theme_file_uri('/bundled-assets/vendor.js'));
        wp_enqueue_script("main-university-js", get_theme_file_uri('/bundled-assets/scripts.js'));
        wp_enqueue_style("our-main-styles", get_theme_file_uri('/bundled-assets/style.css'));
    }
}
add_action('wp_enqueue_scripts', 'watermark_files');


function university_features() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'university_features');

