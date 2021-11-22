<?php get_header(); ?>
<div class="container">
    <div class="row">
   
        <div class="col-md-12">
             <h2><?php echo get_the_title(); ?></h2>
                <?php the_post_thumbnail('large'); ?>

                <p><?php echo get_the_content(); ?></p>
        </div>
    </div>
 </div>

 <?php get_footer(); ?>