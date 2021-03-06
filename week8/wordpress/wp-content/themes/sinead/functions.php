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


//shortcodes
function write_name($atts){
    return "Sinead Cooney";
}
add_shortcode('foobar', 'write_name');

echo "<br>";

function user_name($atts){
    $a = shortcode_atts(
        array('name' => 'placeholder',
              'email' => 'placeholder'),
        $atts);    
        
    return $a['name']. " " . $a['email'];
}
add_shortcode('person', 'user_name');
echo "<br>";

//enclosing shortcode in html 
function caption_shortcode($atts, $content = null){
    return '<span class="caption">' . $content . '</span>';
}
add_shortcode('caption', 'caption_shortcode');



//ajax
add_action('wp_ajax_action_called', 'function_name');

function function_name(){
    $user_id = $_POST["user_id"];
    $user = get_user_by('id', $user_id);
    
    echo 'User is ' .  $user->first_name . ' ' . $user->last_name;
    die();
}

?>