<?php 
//creates menus in the appearance menu
function register_my_menu(){
    register_nav_menu("header-menu", ('Header Menu'));
}
//can decide when the action will load init = at start call the function register_my_menu
add_action('init', 'register_my_menu');

add_theme_support('menu');

//enables widgets
if(function_exists('register_sidebar')){
    register_sidebar(array(
        'name'=>'sidebar',
        'id'=>'sidebar1'
    ));
}
?>