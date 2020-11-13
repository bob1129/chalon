<?php

function en(){
  
  wp_enqueue_style(
    'google-icon',  //名前
    "https://fonts.googleapis.com/icon?family=Material+Icons",  //パス
    [],  //依存するもがあるか
    1  //ver
  );

  wp_enqueue_style(
    'reset',  //名前
    get_theme_file_uri('common/css/reset.css'),  //パス
    [],  //依存するもがあるか
    1  //ver
  );

  wp_enqueue_style(
    'style',  //名前
    get_theme_file_uri('common/css/style.css'),  //パス
    [],  //依存するもがあるか
    filemtime(get_theme_file_path('common/css/style.css'))  //ver
  );

}
add_action('wp_enqueue_scripts','en');

function fen(){

  wp_enqueue_script(
    'jq',
    "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"
  );

  wp_enqueue_script(
    'font-awesome',
    "https://kit.fontawesome.com/dbae26921f.js"
  );

  wp_enqueue_script(
    'main-js',
    get_theme_file_uri('common/js/main.js')
  );

}
add_action('wp_footer','fen');

function add_class($classes){

  $classes = [];

  if (is_page('about')){
    $classes[] = 'about';
  }

  if (is_page('lesson')){
    $classes[] = 'lesson';
  }

  if (is_page('flow')){
    $classes[] = 'flow';
  }

  if (is_page('contact') || is_page('check') || is_page('thanks')){
    $classes[] = 'contact';
  }

  if (is_post_type_archive('menu')){
    $classes[] = 'menu';
  }

  if (is_post_type_archive('voice')){
    $classes[] = 'voice';
  }

  if (is_singular('post') || is_home()){
    $classes[] = 'infomation';
  }

  if (is_singular('menu')){
    $classes[] = 'menu';
    $classes[] = 'cake';
  }

  if (is_singular('voice')){
    $classes[] = 'voice';
    $classes[] = 'sanka';
  }

  return $classes;

}
add_filter('body_class','add_class');

function page_link($page) {

  $path = '/'.$page;
  $page_obj = get_page_by_path($path);

  echo get_page_link($page_obj);
  
}

function the_under($text){

  echo '<div class="under_title">';
  echo '<div class="inner">';
  echo '<span>'.$text.'</span>';
  echo '</div>';
  echo '</div>';
  if(function_exists('bcn_display_list')){
    echo '<div class="bread inner">';
    echo '<ul>';
    bcn_display_list();
    echo '</ul>';
    echo '</div>';
  }
  
}

//ウィジット機能をonにする
register_sidebar([
  'name' => 'infomation'
]);

//アイキャッチ機能をonにする
add_theme_support('post-thumbnails');