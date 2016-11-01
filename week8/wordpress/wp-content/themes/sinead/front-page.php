<div class="row">
    <div class="col-md-10">    
        <?php  get_header(); ?>
    </div>
</div>
<div class="row">    
    <div class="col-md-3">
        <?php  get_sidebar(); ?>
    </div>
    <div class="col-md-7">
        some text on the page
        <?php if(have_Posts()):while(have_posts()):the_post();?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
        some more text under the loop
        <?php get_footer(); ?>
     </div>
</div>  
<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-7">    
        <?php the_field('feature_one'); 
        the_field('feature_two');
        the_field('feature_three');
        ?>
    </div>
</div>        