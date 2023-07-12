<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= the_title(); ?></title>
    <?=wp_head();?>
    <meta name="description" content="Put your description here.">
</head>

<body>
    <div class="invisible-site-nav-background">

    </div>
    <div class="invisible-site-nav">
        <li class="invisible-site-nav__item"><a href="#" class="invisible-site-nav__link">О НАС</a></li>
        <li class="invisible-site-nav__item"><a href="#" class="invisible-site-nav__link">ЗАПИСАТСЯ</a></li>
        <li class="invisible-site-nav__item"><a href="#" class="invisible-site-nav__link">ЗАНЯТИЯ</a></li>
    </div>
    <header class="site-header container">
        <div class="site-header__box">
            <div class="logo-box">
                <a href="<?=get_home_url();?>">
                    <h3 class="site-header__title">Космос просто</h3>
                </a>
            </div>
            <ul class="site-nav">
                <li class="site-nav__item"><a href="#" class="site-nav__link">О НАС</a></li>
                <li class="site-nav__item"><a href="#" class="site-nav__link">ЗАПИСАТСЯ</a></li>
                <li class="site-nav__item"><a href="#" class="site-nav__link">ЗАНЯТИЯ</a></li>
            </ul>
        </div>
        <button class="gamburger">
            <div class="gamburger__item"></div>
            <div class="gamburger__item"></div>
            <div class="gamburger__item"></div>
        </button>
    </header>