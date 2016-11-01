<?php include 'header.php'; 
get_sidebar();
?>

some text on the page
<?php if(have_Posts()):while(have_posts()):the_post();?>

<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php endwhile; endif; ?>
some more text under the loop
<?php get_footer(); ?>