<!DOCTYPE html>
<html lang="en" data-scroll="0">

<head>

  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
   
  

    <meta charset="<?php bloginfo('charset') ?>">
    <base href="<?php echo get_template_directory_uri(); ?>/">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ilia Gromov">
    <link rel="icon" type="image/x-icon" href="assets/images/png/shared/favicon.ico">
    <!-- <title>Chiptuning for you, +20% power and torque – RSchip chiptuning</title> -->
    <title><?php echo wp_get_document_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description') ?>" />
    <!-- <meta name="description" content="Get extra 20% power and torque for your car. RSCHIP provides fuel saving and better MPG numbers. Try safe chiptuning today with free delivery for US and Canada."> -->
    <link rel="stylesheet" href="css/base-styles.css" type="text/css">
    <link rel="stylesheet" href="libs/css/swiper-bundle.min.css" type="text/css">
    <meta property="fb:app_id" content="">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="RSchip chiptuning">
    <meta property="og:title" content="<?php echo wp_get_document_title(); ?>">
    <meta property="og:description" content="<?php bloginfo('description') ?>">
    <meta property="og:url" content="https://rschipchiptuning.com/">
    <meta property="og:image" content="https://rschipchiptuning.com/wp-content/themes/rschipus/assets/img/offer-index.png">
    <meta property="vk:image" content="https://rschipchiptuning.com/wp-content/themes/rschipus/assets/img/offer-index.png">
    <meta property="fb:image" content="https://rschipchiptuning.com/wp-content/themes/rschipus/assets/img/offer-index.png">
    <meta property="twitter:image" content="https://rschipchiptuning.com/wp-content/themes/rschipus/assets/img/offer-index.png">
    <meta property="og:image:secure_url" content="https://rschipchiptuning.com/wp-content/themes/rschipus/assets/img/offer-index.png">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="300">
    <meta property="twitter:card" content="summary">
    <meta property="twitter:site" content="https://rschipchiptuning.com/">
    <meta property="twitter:title" content="<?php echo wp_get_document_title(); ?>">
    <meta property="twitter:description" content="<?php bloginfo('description') ?>">
    <meta property="twitter:creator" content="Ilia Gromov">
    <?php wp_head(); ?>
</head>

<body>

    <header class="header">
        <div class="wrapper">
            <div class="headerFlexContainer">
                <div class="headerLogo">
                    <a href="/"> 
                        <img src="assets/images/svg/logoWhite.svg" alt="logo">
                    </a>
                </div>

                <div class="headerNav">
                    <nav class="headerNavLinks">
                        <?php wp_nav_custom_menu('headerNav', "headerLink"); ?>
               
                    </nav>
                    <a class="headerNavCart" href="cart/cart.html">
                        <div class="icon-cart-png"></div>
                        <!-- <div class="headerNavCart__count">3</div> -->
                    </a>
                    <div class="headerNavBtn"><a class="page__btn" href="shop/shop.html">Shop</a></div>
                    <div class="headerNavBurgerMenu">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="menu">
        <div class="menuHeader">
            <a href="<?php echo get_home_url(); ?>">
                <div class="menuLogo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logoBlack.svg" alt="logo">
                </div>
            </a>
            <div class="menuClose">
                <div class="icon-close"></div>
            </div>
        </div>
        <nav class="menuNav">
            <?php wp_nav_custom_menu('menuNav', 'menuLink'); ?>
        </nav>
        <div class="menuConacts">
            <div class="menuConactsItem">
                <i class="icon icon-phone-png"></i>
                <a class="phone" href="tel:+1 800 796 16 17">+1 800 796 16 17</a>
            </div>
            <div class="menuConactsItem">
                <i class="icon icon-mail-png"> </i>
                <a class="email" href="mailto:rschiphelp@gmail.com">rschiphelp@gmail.com</a>
            </div>
            <div class="menuConactsItem">
                <i class="icon icon-location-png"> </i>
                <address>1201 East 5th Street North Little Rock, Arkansas USA, 72114</address>
            </div>
            <div class="menuConactsIcons">
                <div class="socialIcons">
                    <a class="icon svg-iconInstagramGray svg-iconInstagramGray-box" href="javascript:void(0)"></a>
                    <a class="icon svg-iconFacebookGray svg-iconFacebookGray-box" href="javascript:void(0)"></a>
                    <a class="icon svg-iconYoutubeGray svg-iconYoutubeGray-box" href="javascript:void(0)"></a>
                </div>
            </div>
        </div>
    </section>