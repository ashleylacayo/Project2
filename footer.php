        <footer>
            <div class="container">
                <nav class="row">

                    <div class="col-md-3">
                        <?php dynamic_sidebar('left-footer-widget'); ?>
                    </div>
                    
                    <div class="col-md-3">
                        <?php
                            if(has_nav_menu('footer-left')){
                                wp_nav_menu(array(
                                    'theme_location'  => 'footer-left',
                                    'container_class' => 'footer-left'
                                ));
                            }else{
                                echo "<p>Please select a main menu through the dashboard</p>";
                            }
                        ?>
                    </div>

                    <div class="col-md-3">
                        <?php
                            if(has_nav_menu('footer-middle')){
                                wp_nav_menu(array(
                                    'theme_location'  => 'footer-middle',
                                    'container_class' => 'footer-middle'
                                ));
                            }else{
                                echo "<p>Please select a main menu through the dashboard</p>";
                            }
                        ?>
                    </div>

                    <div class="col-md-3">
                        <?php dynamic_sidebar('right-footer-widget'); ?>
                    </div>
                </nav>
            </div>
        </footer>
        
        
        <?php wp_footer(); ?>
    </body>
</html>