<?php include 'header.php'; 
get_sidebar();
?>

<?php if(have_Posts()):while(have_posts()):the_post();?>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>

