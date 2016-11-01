<?php include 'header.php';
get_sidebar();
 ?>
<?php if(have_Posts()):while(have_posts()):the_post();?>
<?php the_time(); the_date(); ?>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<a href="<?php the_permalink(); ?>"> Read More </a>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
