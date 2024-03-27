
<?php

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
add_action('wp_enqueue_scripts','zitaly_enqueue');
 ?>
