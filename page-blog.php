<?php
    /* 
        Template Name: Blog Template
        Template Post Type: page
    */

get_header(); ?>

    <div class="container">
        <div class="row">
    
            <div class="col-md-12">
                    <?php the_post_thumbnail('large'); ?>
            </div>

            <section class="col-md-12">
                <?php the_content();?>
            </section>
        </div>
    </div>

<?php get_footer(); ?>
