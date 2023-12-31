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
                <img src="<?php echo get_template_directory_uri().'/assets/image/logo.png'?>" alt="">
            </div>
            <div class="header-categories grey-letters">
                Categories
            </div>
            <div class="header-search">

                <button class="search-btn">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <input type="text" placeholder="Search for anything">
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
                        <ul class="mobile-menu-ul">
                            <li class="mobile-menu-li">
                                <a class="mobile-menu-a" href="">Home</a>
                            </li>
                            <li class="mobile-menu-li">
                                <a class="mobile-menu-a" href="">Contact Us</a>
                            </li>
                            <li class="mobile-menu-li">
                                <a class="mobile-menu-a" href="">About Us</a>
                            </li>
                            <li class="mobile-menu-li">
                                <a class="mobile-menu-a" href="">Our Courses</a>
                            </li>
                            <li class="mobile-menu-li">
                                <a class="mobile-menu-a" href="">Facebook Groups</a>
                            </li>
                            <li class="mobile-menu-li">
                                <a class="mobile-menu-a" href="">Prices</a>
                            </li>
                            <li class="mobile-menu-li">
                                <a class="mobile-menu-a" href="">Home</a>
                            </li>

                        </ul>
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

