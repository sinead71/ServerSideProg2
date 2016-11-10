<?php 
/*
Template Name: Template General
*/
?>
<?php include 'header.php'; 
get_sidebar();
?>



<?php if(have_Posts()):while(have_posts()):the_post();?>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>

<?php 
echo get_option('siteurl');
update_option('sc_test', 'sinead');
//echo get_option('sc_test');
update_option('page_views', '1');
$vists = get_option('page_views');
//if($vists !>0 ){
  //  $vists = 0;
//}
//$visits++;
//update_option("page_views");


/*
update_user_meta(3, 'last_name', 'ryan' );
$userId = 
get_current_user_id();
update_user_meta($userId, 'favourite music', 'pop');
echo ("<br>");
echo get_current_user_id();
echo ("<br>");
$allData = get_user_meta(2);
echo($allData);
echo ("<br>");
*/
echo ("<br>");
global $wpdb;

$user_count = $wpdb->get_var(
    "SELECT user_email FROM wp_users WHERE ID=1"
);

echo $user_email;
echo ("<br>");

$user_data = $wpdb->get_row(
    "SELECT * FROM wp_users WHERE ID=1"
);

//can replace user_email with any other wp_user info from db
echo $user_data->user_email;


?>