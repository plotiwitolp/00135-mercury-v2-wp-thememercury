<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container">
            <div class="header" id="top">
                <nav class="header__nav">
                    <div class="header__logo">
                        <?php if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        } ?>
                    </div>


                    <div class="header__menu-wrap">

                        <div class="header__menu">
                            <?php wp_nav_menu([
                                'theme_location'  => 'primary'
                            ]); ?>
                        </div>

                        <!-- <div class="wp-menu">
                                <ul>
                                    <li><a href="./">Home</a></li>
                                    <li><a href="#">Mirror</a></li>
                                    <li><a href="#">Glass</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div> -->


                        <div class="header__menu-burger">
                            <div class="header__menu-burger-open menu-burger_active"></div>
                            <div class="header__menu-burger-close "></div>
                        </div>
                    </div>
                </nav>
                <div class="header__contact">
                    <div class="header__contact-item">
                        <a href="tel:+">
                            <img src="./assets/img/phone.png" alt="phone">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>