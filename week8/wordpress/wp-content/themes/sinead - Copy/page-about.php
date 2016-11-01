<?php include 'header.php'; 
get_header();
get_sidebar();
?>

This is the about page.
<?php if(have_Posts()):while(have_posts()):the_post();?>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php endwhile; endif; ?>
Some more text under the loop on the about page. 
<?php get_footer(); ?>