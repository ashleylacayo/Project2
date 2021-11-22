<?php get_header(); ?>

<div class="container">
    <div class="row">
        <main class="col-med-9">
            <section class="archive-container">
                <h2 class="archive-title"><?php
                    if(is_category()){
                        single_cat_title();
                    }elseif(is_tag()){
                        single_tag_title();
                    }elseif(is_day()){
                        echo "Daily Archives: " . get_the_date();
                    }elseif(is_month()){
                        echo "Monthly Archives: " . get_the_date('F Y');
                    }elseif(is_year()){
                        echo "Yearly Archives: " . get_the_date('Y');
                    }else{
                        echo "Archives";
                    }
                ?>  
                </h2>

                <?php 
                    if(have_posts()){
                        while(have_posts()){
                            the_post();?>

                            <div class="individual-post">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php 
                            $archive_year  = get_the_time('Y');
                            $archive_month = get_the_time('m');
                            $archive_day   = get_the_time('d');
                        ?>
                            </div>
                        <?php } //end while
                    } //end if statement
                ?>
            </section>
        </main>
    </div>  <!---- row ----->
</div> <!---- container ----->
<?php get_footer(); ?>