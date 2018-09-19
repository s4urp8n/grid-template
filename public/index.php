<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto:400,700&amp;subset=cyrillic-ext,latin-ext"
          rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <?php
    echo file_get_contents(str_replace('/', DIRECTORY_SEPARATOR, __DIR__ . '/../resources/views/assets.blade.php'));
    ?>
</head>
<body>
<div class="header">
    <input type="checkbox" id='header-bar__checkbox' class='header-bar__checkbox'>
    <div class="header-bar">
        <div class="header-bar__content">
            <a href="/" class="header-bar__logo">
                Модельесса
            </a>
        </div>
        <label for="header-bar__checkbox" class="header-bar__label">
            <img src="/images/menu.svg" class="header-bar__label__open animated faster flip"/>
            <img src="/images/close.svg" class="header-bar__label__close animated faster rotateIn"/>
        </label>
    </div>
    <div class="header-content">
        <div class="header-main">
            <a class="header-logo" href="/">
                <span class="title">Модельесса</span>
                <span class="slogan">Изготовление карнавальных, сценических костюмов для взрослых и детей</span>
            </a>
            <form method="get" action="/" enctype="multipart/form-data" class="header-search">
                <input name="search" type="text" value="">
                <button type="submit" class="button">
                    <i class="fa fa-search"></i>
                </button>
            </form>
            <div class="header-contacts">
                <a class="phone" href="tel:+7 (918) 140 45 04">+7 918 140 45 04</a>
                <a class="phone" href="tel:(861) 235 71 67">+7 861 235 71 67</a>
                <a href="/" class="street">Краснодар, Адыгейская набережная, 264</a>

            </div>

            <div class="header-menu">

                <a class="active" href="/">
                    Каталог
                </a>
                <a href="#">
                    О компании
                </a>
                <a href="#">
                    Контакты
                </a>
                <a href="#">
                    Доставка
                </a>
                <a href="#">
                    Оптом
                </a>
                <a href="#">
                    <i class="fa fa-sign-in-alt"></i>
                    Войти
                </a>
                <a href="#">
                    <i class="fa fa-shopping-cart"><i class="cart-badge">99</i></i>
                    Корзина
                </a>

            </div>
        </div>
    </div>
</div>
<div class="content">

</div>
<div class="footer">
    <div class="footer-copy">
        © 2013—2018 «Модельесса»
        <br>
        <br>
        Все права защищены.
        <br>
        При использовании материалов с сайта, ссылка на источник обязательна.
    </div>
    <div class="footer-menu">
        <a class="active" href="/">
            Каталог
        </a>
        <a href="/">
            О компании
        </a>
        <a href="/">
            Контакты
        </a>
        <a href="/">
            Доставка
        </a>
        <a href="/">
            Оптом
        </a>

    </div>
    <div class="footer-social">
        <a href="#">
            <img src="/images/fb.png" width="128px" height="128px" alt="">
        </a>
        <a href="#">
            <img src="/images/ig.png" width="128px" height="128px" alt="">
        </a>
        <a href="#">
            <img src="/images/vk.png" width="128px" height="128px" alt="">
        </a>
        <a href="#">
            <img src="/images/ok.png" width="128px" height="128px" alt="">
        </a>
    </div>
</div>
</body>
</html>