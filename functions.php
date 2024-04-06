
<?php


  function basic_function(){
  add_theme_support('menus');
  add_theme_support('widgets');
  add_theme_support('custom-header');
  add_theme_support('custom-background');
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  register_nav_menu('mmmm','Main Meeeenu');

  register_post_type( 'aftab', array(
    'public' => true,
    'labels' =>array(
      'name' =>'ami aftab vai',
      'all items' => 'aftab vai agiye cholo...',
      'add_new'   => 'amra achi tomar samne..',
      'add_new_item' => 'add new notice',

    ),
    'supports'       =>array('title','',''),
    'menu_icon'      => 'dashicons-universal-access'
  ) );
  }


 function zitaly_enqueue(){
        wp_enqueue_style('style',get_template_directory_uri().'/css/zerogrid.css');

        wp_enqueue_style('z-italy-style',get_template_directory_uri().'/css/style.css');
        wp_enqueue_style('z-italy-slide',get_template_directory_uri().'/css/slide.css');
        wp_enqueue_style('z-italy-menu',get_template_directory_uri().'/css/menu.css');
        wp_enqueue_style('z-italy-font-awesome',get_template_directory_uri().'/font-awesome/css/font-awesome.min.css');

        wp_enqueue_script('z-italy-classie',get_template_directory_uri().'/js/classie.js');
        wp_enqueue_script('z-italy-demo',get_template_directory_uri().'/js/demo.js');
        wp_enqueue_script('z-italy-jquery',get_template_directory_uri().'/js/jquery-1.11.3.min.js');
        wp_enqueue_script('jquery');
}
 add_action('after_setup_theme','basic_function');
add_action('wp_enqueue_scripts','zitaly_enqueue');
 ?>
