<?php
    /* 
        Template Name: Home Template
        Template Post Type: page
    */

get_header(); 

    if(have_posts()){
        while(have_posts()) {
            the_post(); ?>
            
            <div class="hero-container">
                <div class="hero-image" style="max-height:100vh; width:100%;">
                    <?php the_post_thumbnail('large'); ?>
                </div>

                <!--<div class="hero-title">
                    <?php the_title(); ?>
                </div>-->
            </div>

            <main class="container">
                <div class="col-lg-12" style="margin-top: 5%;">
                    <?php dynamic_sidebar('service-boxes'); ?>
                </div>
                
                <div class="col-lg-12">
                    <?php dynamic_sidebar('portfolio-section'); ?>
                </div>

                <div class="row">

                    <section class="col-md-12">
                        <?php the_content();?>
                    </section>
                </div>

            
            </main>

        <?php } //end while 
    } ?> 
<?php get_footer(); ?>
