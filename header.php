
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title();?></title>
    <meta name="discription" content="Для Seo">
    <meta name="keywords" content="Для Seo">
    <!-- Инконка-вкладки(Favicon) -->
    <link rel="icon" href="favicon.ico" type="#">
    <link rel="shortcut icon" href="favicon.ico" type="#">
    <!-- OG-метки(Для SEO продвижения) -->
    <meta property="og:title" content="Для Seo">
    <meta property="og:description" content="Для Seo">
    <meta property="og:type" content="article">
    <meta property="og:image" content="#">
    <meta property="og:site_name" content="Для Seo">

    <!--Шрифты(Fonts)-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto+Condensed:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<header class="header" id="header" name="head">
    <div class="bg">
        <div class="container">
            <div class="wrap">
                <?php dynamic_sidebar("logo"); ?>
                <div class="wrap-inform">
                    <div class="wrap__contact">
                        <i class="fas fa-car" style="font-size: 26px; margin-right:10px;  color: #50b09b;"></i>
                        <p>Зона обслуживания: Саратовская область</p>
                    </div>
                    <div class="wrap__contact">
                        <i class="fas fa-clock" style="font-size: 26px;margin-right:10px; color: #50b09b;"></i>
                        <p>Режим работы: круглосуточно</p>
                    </div>
                    <div class="wrap__contact">
                        <i class="fas fa-phone" style="font-size: 26px; margin-right:10px; color: #50b09b;"></i>
                        <div class="phone-sot">
                            <div>Свяжитесь с нами:</div>
                            <?php dynamic_sidebar("phone-sot"); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="burger-menu d-none">
                <?php dynamic_sidebar("logo"); ?>
                <div class="menu-icon" data-behaviour="toggle-menu-icon">
                    <span class="menu-icon__bar"></span>
                </div>
                <nav class="nav-burger" data-element="toggle-nav">
                    <div class="wrap-inform">
                        <div class="wrap__contact">
                            <i class="fas fa-car" style="font-size: 26px; margin-right:10px;  color: #50b09b;"></i>
                            <p>Зона обслуживания: Саратовская область</p>
                        </div>
                        <div class="wrap__contact">
                            <i class="fas fa-clock" style="font-size: 26px;margin-right:10px; color: #50b09b;"></i>
                            <p>Режим работы: круглосуточно</p>
                        </div>
                        <div class="wrap__contact">
                            <i class="fas fa-phone" style="font-size: 26px; margin-right:10px; color: #50b09b;"></i>
                            <div class="phone-sot">
                                <p>Свяжитесь с нами:</p>
                                <?php dynamic_sidebar("phone-sot"); ?>
                            </div>
                        </div>
                    </div>
                    <?php wp_nav_menu( array(
                        'theme_location'  => 'top',
                        'menu'            => 'header-menu',
                        'container'       => 'nav',
                        'container_class' => 'nav',
                        'menu_class'      => 'menu d-md-flex',
                        'items_wrap'      => '<ul class = "%2$s">%3$s</ul>',
                    ) );?>
                </nav>
            </div>
        </div>
    </div>
    <div class="container background">
        <?php wp_nav_menu( array(
            'theme_location'  => 'top',
            'menu'            => 'header-menu',
            'container'       => 'nav',
            'container_class' => 'nav',
            'menu_class'      => 'menu d-md-flex',
            'items_wrap'      => '<ul class = "%2$s">%3$s</ul>',
        ) );?>
        <div class="wrap-offer">
            <?php dynamic_sidebar("title");?>
        </div>
        <a href="#about" class="BtnInSectionTwo go_to">
            <span class="mouse">
              <span class="mouse__wheel"></span>
            </span>
        </a>
    </div>
</header>