<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archbear</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style.css">

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/slider.js" defer></script>

    <script src="js/scroll.js" defer></script>
    <script src="js/menu.js" defer></script> -->

    <?php wp_head(); ?>

</head>
<body>
    <div class="container">

        <!-- Header -->
        <header class="site-header">

            <div class="site-header__inner">
                <a href="" class="site-header__branding">
                    <svg xmlns="http://www.w3.org/2000/svg" width="139.039" height="17.339" viewBox="0 0 139.039 17.339">
                        <g id="Branding" transform="translate(-40 -33.925)">
                          <path class="branding" id="Path_4" data-name="Path 4" d="M2.184,0V-16.8H9.616a5.76,5.76,0,0,1,2.834.7,5.339,5.339,0,0,1,2.011,1.911,5.141,5.141,0,0,1,.739,2.738A5.244,5.244,0,0,1,14.461-8.7a5.4,5.4,0,0,1-2,1.949,5.659,5.659,0,0,1-2.841.717H5.654V0Zm9.527,0L7.439-7.584l3.691-.6,4.752,8.2ZM5.654-8.957H9.445a2.155,2.155,0,0,0,1.15-.3,2.036,2.036,0,0,0,.761-.834,2.642,2.642,0,0,0,.27-1.211,2.38,2.38,0,0,0-.321-1.252,2.187,2.187,0,0,0-.917-.833A3.062,3.062,0,0,0,9-13.688H5.654ZM26.112.24A8.937,8.937,0,0,1,22.7-.393a7.908,7.908,0,0,1-2.693-1.8A8.078,8.078,0,0,1,18.25-4.948a9.56,9.56,0,0,1-.621-3.5,8.8,8.8,0,0,1,.655-3.418,8.382,8.382,0,0,1,1.829-2.743,8.346,8.346,0,0,1,2.751-1.819,8.951,8.951,0,0,1,3.436-.648,8.439,8.439,0,0,1,2.36.335,8.16,8.16,0,0,1,2.131.957,6.975,6.975,0,0,1,1.669,1.472L30.2-11.8a7.205,7.205,0,0,0-1.171-1,5.219,5.219,0,0,0-1.3-.643,4.6,4.6,0,0,0-1.448-.226,5,5,0,0,0-1.944.379,4.719,4.719,0,0,0-1.58,1.068A4.985,4.985,0,0,0,21.7-10.569a5.756,5.756,0,0,0-.385,2.15,5.918,5.918,0,0,0,.378,2.162A4.724,4.724,0,0,0,22.764-4.6a4.686,4.686,0,0,0,1.663,1.058,6.022,6.022,0,0,0,2.154.369,5.149,5.149,0,0,0,1.485-.216,5.483,5.483,0,0,0,1.337-.6,5.738,5.738,0,0,0,1.1-.89l1.754,2.8A5.585,5.585,0,0,1,30.7-.888a9.389,9.389,0,0,1-2.177.828A9.875,9.875,0,0,1,26.112.24ZM45.869,0V-16.8h3.6V0ZM35.275,0V-16.8h3.6V0ZM36.72-6.736l.009-3.28H47.712v3.28ZM54.245,0V-16.8h6.624a5,5,0,0,1,2.352.54,4.072,4.072,0,0,1,1.62,1.5,4.1,4.1,0,0,1,.588,2.184A3.806,3.806,0,0,1,64.6-10.14a4.286,4.286,0,0,1-2.2,1.452l-.072-.456a5.385,5.385,0,0,1,2.088.816,4.49,4.49,0,0,1,1.392,1.464,3.74,3.74,0,0,1,.5,1.92,4.994,4.994,0,0,1-.384,1.98,4.757,4.757,0,0,1-1.08,1.572A4.78,4.78,0,0,1,63.209-.36a5.873,5.873,0,0,1-2.1.36Zm1.2-1.2h5.52a4.608,4.608,0,0,0,2.088-.456,3.532,3.532,0,0,0,1.428-1.26A3.325,3.325,0,0,0,65-4.752a2.971,2.971,0,0,0-.54-1.752,3.606,3.606,0,0,0-1.476-1.2,5.043,5.043,0,0,0-2.136-.432h-5.4Zm0-8.136h5.28A3.729,3.729,0,0,0,62.5-9.744a3.138,3.138,0,0,0,1.212-1.116,2.942,2.942,0,0,0,.444-1.6,2.994,2.994,0,0,0-.924-2.256,3.536,3.536,0,0,0-2.556-.888H55.445ZM70.109,0V-16.8h9.768v1.2H71.309V-1.2h8.472V0Zm.576-8.064v-1.2h7.824v1.2ZM82.157,0l6.384-16.8h1.632L96.485,0H95.141L90.8-11.616q-.288-.744-.492-1.32t-.4-1.1q-.192-.528-.384-1.116t-.432-1.332H89.5q-.24.792-.444,1.392t-.408,1.14q-.2.54-.42,1.128t-.5,1.356L83.405,0Zm2.616-5.064.456-1.2h8.232l.456,1.2ZM99.677,0V-16.8h6.048a5.207,5.207,0,0,1,2.652.672,4.987,4.987,0,0,1,1.836,1.812,4.984,4.984,0,0,1,.672,2.58,4.874,4.874,0,0,1-.636,2.52A4.51,4.51,0,0,1,108.5-7.524a5.178,5.178,0,0,1-2.532.612h-5.088V0Zm10.464,0-4.176-7.224,1.008-.624L111.533,0Zm-9.264-8.112h5.232a3.59,3.59,0,0,0,1.824-.456,3.205,3.205,0,0,0,1.236-1.272,3.8,3.8,0,0,0,.444-1.848,4.012,4.012,0,0,0-.5-2.016,3.613,3.613,0,0,0-1.4-1.392,4.127,4.127,0,0,0-2.052-.5h-4.776ZM115.1.264a1.886,1.886,0,0,1-1.429-.529,2.088,2.088,0,0,1-.507-1.5,2.052,2.052,0,0,1,.535-1.464,1.833,1.833,0,0,1,1.4-.569,1.886,1.886,0,0,1,1.429.529,2.089,2.089,0,0,1,.507,1.5A2.051,2.051,0,0,1,116.5-.305,1.834,1.834,0,0,1,115.1.264Z" transform="translate(62 51)" fill="#fff"/>
                          <path class="branding" id="Path_2" data-name="Path 2" d="M20,.2V17H0Z" transform="translate(40 34)" fill="#fff"/>
                        </g>
                    </svg>
                </a>

                <div class="site-header__buttons">
                    <div class="languages">
                        <ul class="languages__list">
                            <li class="languages__item languages__item--current">
                                <a href="" class="languages__link">EN</a>
                            </li>
                            <li class="languages__item">
                                <a href="" class="languages__link">SV</a>
                            </li>
                        </ul>
                    </div>

                    <button id="menu-button" class="menu-button">
                        <div class="menu-button__hamburger"></div>
                    </button>
                </div>
            </div>

        </header>

        <!-- Menu -->
        <nav class="site-menu">
            <div class="site-menu__inner">
                <figure class="site-menu__img">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/menu@2x.jpg" alt="">
                </figure>

                <!-- <div class="menu">
                    <ul class="menu__list">
                        <li class="menu__item menu__item--current">
                            <span class="menu__count">01.</span>
                            <a href="" class="menu__link">Home</a>
                        </li>
                        <li class="menu__item">
                            <span class="menu__count">02.</span>
                            <a href="" class="menu__link">Portfolio</a>
                        </li>
                        <li class="menu__item">
                            <span class="menu__count">03.</span>
                            <a href="" class="menu__link">About</a>
                        </li>
                        <li class="menu__item">
                            <span class="menu__count">04.</span>
                            <a href="" class="menu__link">Services</a>
                        </li>
                        <li class="menu__item">
                            <span class="menu__count">05.</span>
                            <a href="" class="menu__link">Contact us</a>
                        </li>
                    </ul>
                </div> -->

                <?php 

                    $args = [
                        'container_class'   => 'menu',
                        'menu_class'        => 'menu__list',
                        'theme_location'    => 'main_menu'

                        ];

                        wp_nav_menu($args);

                ?>

                <!-- <div class="social">
                    <ul class="social__list">
                        <li class="social__item">
                            <a href="" class="social__link">Facebook</a>
                        </li>
                        <li class="social__item">
                            <a href="" class="social__link">Instagram</a>
                        </li>
                        <li class="social__item">
                            <a href="" class="social__link">Pinterest</a>
                        </li>
                    </ul>
                </div> -->

                <?php 

                    $args = [
                        'container_class' => 'social',
                        'menu_class' => 'social__list', 
                        'theme_location' => 'social_menu'
                    ];

                    wp_nav_menu($args);


                ?>

            </div>
        </nav>

        <!-- Hero -->
        <section class="hero slider swiper">
            <div class="hero__inner slider__wrapper swiper-wrapper">

                <!-- Slide 1 -->
                <div class="hero__content swiper-slide" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/hero@2x.jpg);">
                    <div class="anchor-name"><strong>City Hall</strong> - München</div>
                    <div class="hero__text">
                        <h2 class="hero__title">Modern <br><strong>Architecture</strong></h2>
                        <p class="hero__ingress">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus quas quidem perferendis similique beatae ab, dolores totam ipsum veritatis dignissimos?</p>
                    </div>

                    <div class="slider__description">
                        <div>
                            <h3 class="slider__title">New bold design for the modern City hall in München, GER.</h3>
                            <p class="slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio praesentium perspiciatis qui voluptatem similique.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="hero__content swiper-slide" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/hero-3.jpg);">
                    <div class="anchor-name"><strong>Beach Villas</strong> - Florida</div>
                    <div class="hero__text">
                        <h2 class="hero__title">Beach Villas<br><strong>in Sunny Florida</strong></h2>
                        <p class="hero__ingress">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa nihil tempore iste a maxime aliquam consectetur nemo natus numquam. Pariatur? </p>
                    </div>

                    <div class="slider__description">
                        <div>
                            <h3 class="slider__title">Finally, Florida gets their new Beach Villas.</h3>
                            <p class="slider__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis voluptas soluta rerum minus iure facere!</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="hero__content swiper-slide" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/hero-2@2x.jpg);">
                    <div class="anchor-name"><strong>Microsoft HQ</strong> - Washigton DC</div>
                    <div class="hero__text">
                        <h2 class="hero__title">Modern <br><strong>Architecture</strong></h2>
                        <p class="hero__ingress">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus quas quidem perferendis similique beatae ab, dolores totam ipsum veritatis dignissimos?</p>
                    </div>

                    <div class="slider__description">
                        <div>
                            <h3 class="slider__title">New bold design for the modern City hall in München, GER.</h3>
                            <p class="slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio praesentium perspiciatis qui voluptatem similique.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="slider__pagination">
                <a href="" class="slider__arrow slider__arrow--left"><img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-chevron_left.svg" alt=""></a>
                <div class="slider__meta">
                    <div class="slider__counter"><strong class="slider__current">01</strong><span class="slider__total">05</span></div>
                    <div class="slider__anchor"><strong>City Hall</strong> - München</div>
                </div>
                <a href="" class="slider__arrow slider__arrow--right"><img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-chevron_right.svg" alt=""></a>
            </div>

        </section>

        <!-- Upcoming Projects -->
        <section class="upcoming-projects section">
            <header class="upcoming-projects__header section__header">
                <h2 class="upcoming-projects__title section__title">Upcoming projects</h2>
            </header>

            <div class="upcoming-projects__content section__content">
                <article class="featured">
                    <div class="featured__project">
                        <header class="featured__header">
                            <h5 class="featured__name"><strong>Project</strong> Berlin Skyscrapers</h5>
                            <h3 class="featured__title">Light & modern <strong>living in Berlin</strong></h3>
                        </header>

                        <div class="featured__content">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus quas quidem perferendis similique beatae ab, dolores totam ipsum veritatis dignissimos?</p>
                        </div>

                        <footer class="featured__footer">
                            <a href="" class="featured__explore">Explore project</a>
                        </footer>
                    </div>

                    <figure class="featured__img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/project-1@2x.jpg" alt="Image of Berlin office">
                    </figure>


                </article>
            </div>

            <div class="projects">

                <div class="swiper-wrapper">
                    <!-- Project 1 -->
                    <article class="project swiper-slide">
                        <header class="project__header" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/project-2@2x.jpg);">
                            <a href="" class="project__readmore"><img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-more.svg" alt=""></a>
                        </header>
                        <h3 class="project__title">New office spaces in central Boston, USA</h3>
                        <div class="project__name"><strong>Project</strong> Office USA</div>
                    </article>
    
                    <!-- Project 2 -->
                    <article class="project swiper-slide">
                        <header class="project__header" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/project-3@2x.jpg);">
                            <a href="" class="project__readmore"><img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-more.svg" alt=""></a>
                        </header>
                        <h3 class="project__title">Beach villa project in Florida and Hawaii</h3>
                        <div class="project__name"><strong>Project</strong> Beach Villas, Coast</div>
                    </article>
    
                    <!-- Project 3 -->
                    <article class="project swiper-slide">
                        <header class="project__header" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/project-4@2x.jpg);">
                            <a href="" class="project__readmore"><img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-more.svg" alt=""></a>
                        </header>
                        <h3 class="project__title">Clean lines and infinity windows for Microsoft HQ</h3>
                        <div class="project__name"><strong>Project</strong> Microsoft HQ</div>
                    </article>
    
                    <!-- Project 4 -->
                    <article class="project swiper-slide">
                        <header class="project__header" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/project-5@2x.jpg);">
                            <a href="" class="project__readmore"><img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-more.svg" alt=""></a>
                        </header>
                        <h3 class="project__title">Paris Museum expands its exhibition with glass </h3>
                        <div class="project__name"><strong>Project</strong> Paris Museum</div>
                    </article>

                    <!-- Project 5 -->
                    <article class="project swiper-slide">
                        <header class="project__header" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/project-2@2x.jpg);">
                            <a href="" class="project__readmore"><img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-more.svg" alt=""></a>
                        </header>
                        <h3 class="project__title">New office spaces in central Boston, USA</h3>
                        <div class="project__name"><strong>Project</strong> Office USA</div>
                    </article>
    
                    <!-- Project 6 -->
                    <article class="project swiper-slide">
                        <header class="project__header" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/project-3@2x.jpg);">
                            <a href="" class="project__readmore"><img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-more.svg" alt=""></a>
                        </header>
                        <h3 class="project__title">Beach villa project in Florida and Hawaii</h3>
                        <div class="project__name"><strong>Project</strong> Beach Villas, Coast</div>
                    </article>
    
                    <!-- Project 7 -->
                    <article class="project swiper-slide">
                        <header class="project__header" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/project-4@2x.jpg);">
                            <a href="" class="project__readmore"><img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-more.svg" alt=""></a>
                        </header>
                        <h3 class="project__title">Clean lines and infinity windows for Microsoft HQ</h3>
                        <div class="project__name"><strong>Project</strong> Microsoft HQ</div>
                    </article>
    
                    <!-- Project 8 -->
                    <article class="project swiper-slide">
                        <header class="project__header" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/project-5@2x.jpg);">
                            <a href="" class="project__readmore"><img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-more.svg" alt=""></a>
                        </header>
                        <h3 class="project__title">Paris Museum expands its exhibition with glass </h3>
                        <div class="project__name"><strong>Project</strong> Paris Museum</div>
                    </article>

                    <!-- Project 9 -->
                    <article class="project swiper-slide">
                        <header class="project__header" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/project-2@2x.jpg);">
                            <a href="" class="project__readmore"><img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-more.svg" alt=""></a>
                        </header>
                        <h3 class="project__title">New office spaces in central Boston, USA</h3>
                        <div class="project__name"><strong>Project</strong> Office USA</div>
                    </article>
    
                    <!-- Project 10 -->
                    <article class="project swiper-slide">
                        <header class="project__header" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/project-3@2x.jpg);">
                            <a href="" class="project__readmore"><img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-more.svg" alt=""></a>
                        </header>
                        <h3 class="project__title">Beach villa project in Florida and Hawaii</h3>
                        <div class="project__name"><strong>Project</strong> Beach Villas, Coast</div>
                    </article>
    
                    <!-- Project 11 -->
                    <article class="project swiper-slide">
                        <header class="project__header" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/project-4@2x.jpg);">
                            <a href="" class="project__readmore"><img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-more.svg" alt=""></a>
                        </header>
                        <h3 class="project__title">Clean lines and infinity windows for Microsoft HQ</h3>
                        <div class="project__name"><strong>Project</strong> Microsoft HQ</div>
                    </article>
    
                    <!-- Project 12 -->
                    <article class="project swiper-slide">
                        <header class="project__header" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/project-5@2x.jpg);">
                            <a href="" class="project__readmore"><img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-more.svg" alt=""></a>
                        </header>
                        <h3 class="project__title">Paris Museum expands its exhibition with glass </h3>
                        <div class="project__name"><strong>Project</strong> Paris Museum</div>
                    </article>
                </div>

            </div>

        </section>

        <section class="about section">
            <header class="about__header section__header">
                <h2 class="about__title section__title">Archbear workflow</h2>
            </header>

            <div class="about__content section__content">
                <article class="workflow">
    
                    <figure class="workflow__img">
                        <img src="<?php echo get_template_directory_uri()?>/assets//images/about@2x.jpg" alt="">
                    </figure>
    
                    <div class="workflow__text">
                        <header class="workflow__header">
                            <h3 class="workflow__title">Design, creativity<br> <strong>details & focus</strong></h3>
                        </header>
    
                        <div class="workflow__content">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus quas quidem perferendis similique beatae ab, dolores totam ipsum veritatis dignissimos?</p>
                        </div>
    
                        <footer class="workflow__footer">
                            <a href="" class="workflow__explore">This is Archbear</a>
                        </footer>
                    </div>
                </article>

            </div>


        </section>


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

                    <!-- <div class="social">
                        <ul class="social__list">
                            <li class="social__item">
                                <a href="" class="social__link">Facebook</a>
                            </li>
                            <li class="social__item">
                                <a href="" class="social__link">Instagram</a>
                            </li>
                            <li class="social__item">
                                <a href="" class="social__link">Pinterest</a>
                            </li>
                        </ul>
                    </div> -->


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