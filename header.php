<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title><?php bloginfo('name'); ?></title>

        <!--Font Awesome -->
        <script src="https://kit.fontawesome.com/fef0119134.js" crossorigin="anonymous"></script>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    <header class="absolute-header" style="position: absolute;z-index: 1;">            
        <div class="container-fluid">
                <div class="navbar-header-LOGO">
                        <?php 
                        //Display logo if it's set, if not display site title. 
                        if(get_header_image() == ''){?>
                        <h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name');?></a></h1>
                        <?php }else{?>
                            <a href="<?php get_home_url(); ?>"><img class="logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>  " width="<?php echo get_custom_header()->width; ?>" alt="Logo" /></a>
                        <?php } ?>
                </div>
                
                <div class="nav-links">
                    <ul class="nav navbar-nav">
                    <nav class="navbar navbar-inverse">
                            <?php
                                if(has_nav_menu('main-menu')){
                                    wp_nav_menu(array(
                                        'theme_location' => 'main-menu',
                                        'container-class' => 'main-menu'
                                    ));
                                }else{
                                    echo "<p>Please select a main menu through the dashboard";
                                }
                           ?>
                    </ul>
                <button class="btn navbar-btn" style="background-color: #6a7ad0;color: white;">REQUEST QUOTE</button>
                </div>
                    </nav>                   
        </div>
    </header>
