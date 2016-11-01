<div class="row">
    <div class="col-md-10">    
        <?php  get_header(); ?>
    </div>
</div>
<div class="row">    
    <div class="col-md-3">
        <?php  get_sidebar(); ?>
    </div>
</div>        

This is the about page.
<?php if(have_Posts()):while(have_posts()):the_post();?>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php endwhile; endif; ?>
Some more text under the loop on the about page. 
<?php get_footer(); ?>

<?php 
//this shows the feature from the home page. It can be added to any page of the website with this code.
the_field('feature_one', '20');
?>