<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
<div class="header">
        <div class="header-wrapper">
            <div class="header-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">    <img src="<?php echo get_template_directory_uri().'/assets/image/logo.png'?>" alt=""></a>
            </div>
            <div class="header-categories grey-letters">
               <p class="cate-p"> More Info </p>
               <div class="header-wp-menu">
               <?php wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => 'header-wp-menu-ul-wrapper',
                        'container_id' => 'ewt-wp-header-wrapper',


                    )
                );
                ?>
               </div>
            </div>
            <div class="header-search">

               <?php get_search_form(); ?>
            </div>
            <div class="header-one grey-letters">
                Teach on gaqkelaniya
            </div>
            <div class="header-two">
                <span>
                    <i class="fa-solid fa-phone grey-letters"></i>
                </span>
                <p class="tel-p grey-letters">0771683577</p>
            </div>


            <div class="header-six">
                <p>Whatsapp Us</p>
            </div>
            <div class="hamburger-icon">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="mobile-menu-wrapper">
                <div class="mobile-menu-area">
                    <div class="mobile-menu-upper">
                        <div class="hamburger-close">
                            <i class="fa-regular fa-rectangle-xmark"></i>
                        </div>
                        <?php wp_nav_menu(
                                 array(
                                    'theme_location' => 'top-menu',
                                    'depth' => 2,
                                    'container' => 'div',
                                    'container_class' => 'header-wp-mobile-menu-ul-wrapper'
                                    
                                     )
                                         );
                         ?>
                    </div>
                    <div class="mobile-menu-footer">
                        <div class="tele-number">
                            <span>
                                <i class="fa-solid fa-phone grey-letters"></i>
                            </span>
                            <p class="tel-p grey-letters">0771683577</p>
                        </div>
                        <div class="whatsapp-btn">
                            Whatsapp Us
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-bg-modal">

                </div>
            </div>

        </div>
    </div>

