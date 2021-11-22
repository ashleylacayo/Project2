<?php get_header(); ?>
<div class="container">
    <div class="row">
        <?php
        if(have_posts()){
            while(have_posts()){
                the_post(); ?>
                <div class="col-md-12"> 
                <?php the_post_thumbnail('thumbnail'); ?>

                <h2><?php echo get_the_title(); ?> </h2>

                <p><?php echo get_the_excerpt(); ?> </p>

                <a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>"> Read more about this article</a>

                </div>
                <?php
            } //End whil
        } //End if

        ?>
    </div> <!--- row --->
</div> <!--- container --->
<h1> Hello World </h1>

<?php get_footer(); ?>
