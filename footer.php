<footer class="site-footer">
            <div class="site-footer__inner">
                <div class="site-footer__content">
                    <article class="hire">
                        <header class="hire__header">
                            <h3 class="hire__title">Hire<br> <strong>Archbear!</strong></h3>
                        </header>
    
                        <div class="hire__content">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus quas quidem perferendis similique beatae ab, dolores totam ipsum veritatis dignissimos?</p>
                        </div>
    
                        <footer class="hire__footer">
                            <a href="" class="hire__explore">Hire us!</a>
                        </footer>
                    </article>
                </div>

                <div class="newsletter">
                    <h3 class="newsletter__title">newsletter</h3>
                    <form action="" class="newsletter__form">
                        <input type="text" class="newsletter__input" placeholder="jane.doe@mail.com">
                        <button type="submit" class="newsletter__submit"><img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow_right.svg" alt=""></button>
                        <p class="newsletter__description">By signing up you accept our <strong>privacy policy</strong> and our <strong>terms</strong> of handling your personal data.</p>
                    </form>
                </div>

                <div class="site-footer__copyright">
                    <div class="site-footer__branding">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/logo.svg" alt="">
                    </div>

                    <div class="copyright">
                        &copy; Copyright 2022 Archbear, All rights reserved.
                    </div>
                    
                    <?php 
                
                        $args = [
                            'container_class' => 'social',
                            'menu_class' => 'social__list', 
                            'theme_location' => 'social_menu'
                        ];

                        wp_nav_menu($args);
                
                    ?>

                </div>

            </div>
        </footer>

    </div>

    <?php wp_footer(); ?>
</body>
</html>