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

function get_user_role(){
    global $wp_roles;
    $currentrole='';
    
    foreach($wp_roles->role_names as $role => $name){
        if(current_user_can($role)){
            $currentrole = $role;
        }
    }
    return $currentrole;
}
?>