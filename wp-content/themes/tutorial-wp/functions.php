<?php
function bazuan_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','bazuan_theme_support');


function bazuan_menus(){

    $locations = array(

        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Iterms"
    );
    register_nav_menus($locations);
}
add_action('init','bazuan_menus');




 function shinshuki_register_styles(){

$version = wp_get_theme()->get('version');
    wp_enqueue_style ('shinshuki-style',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",array('shinshuki-bootstrap'),$version,'all');
    wp_enqueue_style ('shinshuki-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",array(),$version,'all');
    wp_enqueue_style ('shinshuki-fontawesome',get_template_directory_uri()."/style.css",array(),$version,'all');

 }
 add_action('wp_enqueue_scripts','shinshuki_register_styles');
?>

<?php
 function shinshuki_register_scripts(){

wp_enqueue_script('shinshuki-jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js',array(),'3.4.1',true);
wp_enqueue_script('shinshuki-popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',array(),'3.4.1',true);
wp_enqueue_script('shinshuki-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',array(),'3.4.1',true);
wp_enqueue_script('shinshuki-main',get_template_directory_uri()."/assets/js/main.js",array(),'3.4.1',true);



 }
 add_action('wp_enqueue_scripts','shinshuki_register_scripts');


function bazuan_widget_areas(){

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => ''

        ),
        array(
            'name' => 'sidebar area',
            'id' => 'sidebar-1',
            'description' => 'sidebar widget area'
        )
        );

}

add_action('widgets_init', 'bazuan_widget_areas');

?>
