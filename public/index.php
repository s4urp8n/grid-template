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
    <div class="catalog">

        <select class="dropdown-select">

            <option href="/?categoryId=0f3a9293-7c6f-11e8-9c77-b06ebf2a5f2f&amp;categoryName=%D0%90%D0%BA%D1%81%D0%B5%D1%81%D1%81%D1%83%D0%B0%D1%80%D1%8B">
                Аксессуары
            </option>

            <optgroup label=" Взрослые костюмы">
                <option href="/?categoryId=dd8e04f3-631d-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-Winx">
                    Winx
                </option>
                <option href="/?categoryId=dd8e04fb-631d-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%90%D0%BD%D0%B3%D0%B5%D0%BB%D1%8B">
                    Ангелы
                </option>
                <option href="/?categoryId=dd8e04f8-631d-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%90%D0%A0%D0%A2+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B">
                    АРТ костюмы
                </option>
                <option href="/?categoryId=dd8e0504-631d-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%92%D0%B5%D1%87%D0%B5%D1%80%D0%BD%D0%B8%D0%B5+%D0%BF%D0%BB%D0%B0%D1%82%D1%8C%D1%8F">
                    Вечерние платья
                </option>
                <option href="/?categoryId=dd8e0515-631d-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%94%D0%B5%D0%BC%D0%BE%D0%BD%D1%8B">
                    Демоны
                </option>
                <option href="/?categoryId=dd8e0522-631d-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%94%D0%BB%D1%8F+%D0%BF%D1%8B%D1%88%D0%BD%D1%8B%D1%85+%D1%84%D0%BE%D1%80%D0%BC+XXL">
                    Для пышных форм XXL
                </option>
                <option href="/?categoryId=921b1006-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%96%D0%B8%D0%B2%D0%BE%D1%82%D0%BD%D1%8B%D0%B5">
                    Животные
                </option>
                <option href="/?categoryId=921b1012-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%98%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B5">
                    Исторические
                </option>
                <option href="/?categoryId=921b101d-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9C%D0%B0%D0%BD%D1%82%D0%B8%D0%B8">
                    Мантии
                </option>
                <option href="/?categoryId=921b102c-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9C%D0%BE%D0%BD%D1%81%D1%82%D1%80+%D0%A5%D0%B0%D0%B9">
                    Монстр Хай
                </option>
                <option href="/?categoryId=921b1037-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9C%D1%83%D0%BB%D1%8C%D1%82%D1%8F%D1%88%D0%BA%D0%B8">
                    Мультяшки
                </option>
                <option href="/?categoryId=921b1039-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9D%D0%B0%D1%80%D0%BE%D0%B4%D0%BD%D1%8B%D0%B9+%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%B8%D0%B5">
                    Народный русские
                </option>
                <option href="/?categoryId=921b103a-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9D%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5">
                    Национальные
                </option>
                <option href="/?categoryId=921b103b-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9D%D0%BE%D0%B2%D0%BE%D0%B3%D0%BE%D0%B4%D0%BD%D0%B8%D0%B5">
                    Новогодние
                </option>
                <option href="/?categoryId=921b1038-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9D%D0%AD%D0%9F">
                    НЭП
                </option>
                <option href="/?categoryId=ae124942-67c4-11e8-9c6e-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9F%D0%BB%D0%B0%D1%89%D0%B8%2C+%D0%BD%D0%B0%D0%BA%D0%B8%D0%B4%D0%BA%D0%B8%2C+%D1%80%D1%8F%D1%81%D1%8B">
                    Плащи, накидки, рясы
                </option>
                <option href="/?categoryId=ae12494f-67c4-11e8-9c6e-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9F%D1%80%D0%B8%D0%BD%D1%86%D1%8B+%D0%B8+%D0%9F%D1%80%D0%B8%D0%BD%D1%86%D0%B5%D1%81%D1%81%D1%8B">
                    Принцы и Принцессы
                </option>
                <option href="/?categoryId=921b103c-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9F%D1%80%D0%BE%D1%84%D0%B5%D1%81%D1%81%D0%B8%D0%B8%2C+%D1%84%D0%BE%D1%80%D0%BC%D0%B0">
                    Профессии, форма
                </option>
                <option href="/?categoryId=921b103d-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%A1%D0%BA%D0%B0%D0%B7%D0%BE%D1%87%D0%BD%D1%8B%D0%B5+%D0%BF%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%B6%D0%B8">
                    Сказочные персонажи
                </option>
                <option href="/?categoryId=921b103e-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%A1%D1%82%D0%B8%D0%BB%D1%8F%D0%B3%D0%B8">
                    Стиляги
                </option>
                <option href="/?categoryId=921b103f-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%A4%D0%B5%D0%B8%2C+%D0%B1%D0%B0%D0%B1%D0%BE%D1%87%D0%BA%D0%B8%2C+%D0%BF%D1%87%D0%B5%D0%BB%D0%BA%D0%B8">
                    Феи, бабочки, пчелки
                </option>
                <option href="/?categoryId=921b1040-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%A5%D1%8D%D0%BB%D0%BB%D0%BE%D1%83%D0%B8%D0%BD">
                    Хэллоуин
                </option>
            </optgroup>

            <optgroup label="Детские костюмы">
                <option href="/?categoryId=dd8e04fb-631d-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%90%D0%BD%D0%B3%D0%B5%D0%BB%D1%8B">
                    Ангелы
                </option>
                <option href="/?categoryId=dd8e04f8-631d-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%90%D0%A0%D0%A2+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B">
                    АРТ костюмы
                </option>
                <option href="/?categoryId=dd8e0504-631d-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%92%D0%B5%D1%87%D0%B5%D1%80%D0%BD%D0%B8%D0%B5+%D0%BF%D0%BB%D0%B0%D1%82%D1%8C%D1%8F">
                    Вечерние платья
                </option>
                <option href="/?categoryId=dd8e0522-631d-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%94%D0%BB%D1%8F+%D0%BF%D1%8B%D1%88%D0%BD%D1%8B%D1%85+%D1%84%D0%BE%D1%80%D0%BC+XXL">
                    Для пышных форм XXL
                </option>
                <option href="/?categoryId=921b1006-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%96%D0%B8%D0%B2%D0%BE%D1%82%D0%BD%D1%8B%D0%B5">
                    Животные
                </option>
                <option href="/?categoryId=921b103e-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%A1%D1%82%D0%B8%D0%BB%D1%8F%D0%B3%D0%B8">
                    Стиляги
                </option>
                <option href="/?categoryId=921b103f-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%A4%D0%B5%D0%B8%2C+%D0%B1%D0%B0%D0%B1%D0%BE%D1%87%D0%BA%D0%B8%2C+%D0%BF%D1%87%D0%B5%D0%BB%D0%BA%D0%B8">
                    Феи, бабочки, пчелки
                </option>
                <option href="/?categoryId=921b1040-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%A5%D1%8D%D0%BB%D0%BB%D0%BE%D1%83%D0%B8%D0%BD">
                    Хэллоуин
                </option>
            </optgroup>

        </select>

        <nav class="dropdown-container">


            <a href="/?categoryId=0f3a9293-7c6f-11e8-9c77-b06ebf2a5f2f&amp;categoryName=%D0%90%D0%BA%D1%81%D0%B5%D1%81%D1%81%D1%83%D0%B0%D1%80%D1%8B"
               class="dropdown-container__link active">
                Аксессуары
            </a>


            <nav class="dropdown-container__dropdown">
                <input type="checkbox" class="dropdown-container__dropdown__checkbox"
                       id="accordion-dd8e04f2-631d-11e8-9c6d-b06ebf2a5f2f"
                       name="accordion-dd8e04f2-631d-11e8-9c6d-b06ebf2a5f2f">
                <label for="accordion-dd8e04f2-631d-11e8-9c6d-b06ebf2a5f2f"
                       class="dropdown-container__dropdown__label  ">
                    Взрослые костюмы
                </label>
                <div class="dropdown-container__dropdown__content">
                    <a href="/?categoryId=dd8e04f3-631d-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-Winx"
                       class="dropdown-container__dropdown__content__link ">
                        Winx
                    </a>
                    <a href="/?categoryId=dd8e04fb-631d-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%90%D0%BD%D0%B3%D0%B5%D0%BB%D1%8B"
                       class="dropdown-container__dropdown__content__link ">
                        Ангелы
                    </a>
                    <a href="/?categoryId=dd8e04f8-631d-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%90%D0%A0%D0%A2+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B"
                       class="dropdown-container__dropdown__content__link ">
                        АРТ костюмы
                    </a>
                    <a href="/?categoryId=dd8e0504-631d-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%92%D0%B5%D1%87%D0%B5%D1%80%D0%BD%D0%B8%D0%B5+%D0%BF%D0%BB%D0%B0%D1%82%D1%8C%D1%8F"
                       class="dropdown-container__dropdown__content__link ">
                        Вечерние платья
                    </a>
                    <a href="/?categoryId=dd8e0515-631d-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%94%D0%B5%D0%BC%D0%BE%D0%BD%D1%8B"
                       class="dropdown-container__dropdown__content__link ">
                        Демоны
                    </a>
                    <a href="/?categoryId=dd8e0522-631d-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%94%D0%BB%D1%8F+%D0%BF%D1%8B%D1%88%D0%BD%D1%8B%D1%85+%D1%84%D0%BE%D1%80%D0%BC+XXL"
                       class="dropdown-container__dropdown__content__link ">
                        Для пышных форм XXL
                    </a>
                    <a href="/?categoryId=921b1006-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%96%D0%B8%D0%B2%D0%BE%D1%82%D0%BD%D1%8B%D0%B5"
                       class="dropdown-container__dropdown__content__link ">
                        Животные
                    </a>
                    <a href="/?categoryId=921b1012-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%98%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B5"
                       class="dropdown-container__dropdown__content__link ">
                        Исторические
                    </a>
                    <a href="/?categoryId=921b101d-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9C%D0%B0%D0%BD%D1%82%D0%B8%D0%B8"
                       class="dropdown-container__dropdown__content__link ">
                        Мантии
                    </a>
                    <a href="/?categoryId=921b102c-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9C%D0%BE%D0%BD%D1%81%D1%82%D1%80+%D0%A5%D0%B0%D0%B9"
                       class="dropdown-container__dropdown__content__link ">
                        Монстр Хай
                    </a>
                    <a href="/?categoryId=921b1037-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9C%D1%83%D0%BB%D1%8C%D1%82%D1%8F%D1%88%D0%BA%D0%B8"
                       class="dropdown-container__dropdown__content__link ">
                        Мультяшки
                    </a>
                    <a href="/?categoryId=921b1039-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9D%D0%B0%D1%80%D0%BE%D0%B4%D0%BD%D1%8B%D0%B9+%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%B8%D0%B5"
                       class="dropdown-container__dropdown__content__link ">
                        Народный русские
                    </a>
                    <a href="/?categoryId=921b103a-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9D%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5"
                       class="dropdown-container__dropdown__content__link ">
                        Национальные
                    </a>
                    <a href="/?categoryId=921b103b-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9D%D0%BE%D0%B2%D0%BE%D0%B3%D0%BE%D0%B4%D0%BD%D0%B8%D0%B5"
                       class="dropdown-container__dropdown__content__link ">
                        Новогодние
                    </a>
                    <a href="/?categoryId=921b1038-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9D%D0%AD%D0%9F"
                       class="dropdown-container__dropdown__content__link ">
                        НЭП
                    </a>
                    <a href="/?categoryId=ae124942-67c4-11e8-9c6e-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9F%D0%BB%D0%B0%D1%89%D0%B8%2C+%D0%BD%D0%B0%D0%BA%D0%B8%D0%B4%D0%BA%D0%B8%2C+%D1%80%D1%8F%D1%81%D1%8B"
                       class="dropdown-container__dropdown__content__link ">
                        Плащи, накидки, рясы
                    </a>
                    <a href="/?categoryId=ae12494f-67c4-11e8-9c6e-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9F%D1%80%D0%B8%D0%BD%D1%86%D1%8B+%D0%B8+%D0%9F%D1%80%D0%B8%D0%BD%D1%86%D0%B5%D1%81%D1%81%D1%8B"
                       class="dropdown-container__dropdown__content__link ">
                        Принцы и Принцессы
                    </a>
                    <a href="/?categoryId=921b103c-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9F%D1%80%D0%BE%D1%84%D0%B5%D1%81%D1%81%D0%B8%D0%B8%2C+%D1%84%D0%BE%D1%80%D0%BC%D0%B0"
                       class="dropdown-container__dropdown__content__link ">
                        Профессии, форма
                    </a>
                    <a href="/?categoryId=921b103d-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%A1%D0%BA%D0%B0%D0%B7%D0%BE%D1%87%D0%BD%D1%8B%D0%B5+%D0%BF%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%B6%D0%B8"
                       class="dropdown-container__dropdown__content__link ">
                        Сказочные персонажи
                    </a>
                    <a href="/?categoryId=921b103e-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%A1%D1%82%D0%B8%D0%BB%D1%8F%D0%B3%D0%B8"
                       class="dropdown-container__dropdown__content__link ">
                        Стиляги
                    </a>
                    <a href="/?categoryId=921b103f-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%A4%D0%B5%D0%B8%2C+%D0%B1%D0%B0%D0%B1%D0%BE%D1%87%D0%BA%D0%B8%2C+%D0%BF%D1%87%D0%B5%D0%BB%D0%BA%D0%B8"
                       class="dropdown-container__dropdown__content__link ">
                        Феи, бабочки, пчелки
                    </a>
                    <a href="/?categoryId=921b1040-63d8-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%92%D0%B7%D1%80%D0%BE%D1%81%D0%BB%D1%8B%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%A5%D1%8D%D0%BB%D0%BB%D0%BE%D1%83%D0%B8%D0%BD"
                       class="dropdown-container__dropdown__content__link ">
                        Хэллоуин
                    </a>
                </div>
            </nav>

            <nav class="dropdown-container__dropdown">
                <input type="checkbox" class="dropdown-container__dropdown__checkbox"
                       id="accordion-9cefc6b3-6233-11e8-9c6d-b06ebf2a5f2f"
                       name="accordion-9cefc6b3-6233-11e8-9c6d-b06ebf2a5f2f">
                <label for="accordion-9cefc6b3-6233-11e8-9c6d-b06ebf2a5f2f"
                       class="dropdown-container__dropdown__label  ">
                    Детские костюмы
                </label>
                <div class="dropdown-container__dropdown__content">
                    <a href="/?categoryId=9cefc6b4-6233-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B8%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%93%D1%80%D0%B8%D0%B1%D1%8B"
                       class="dropdown-container__dropdown__content__link ">
                        Грибы
                    </a>
                    <a href="/?categoryId=40882322-6243-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B8%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%96%D0%B8%D0%B2%D0%BE%D1%82%D0%BD%D1%8B%D0%B5"
                       class="dropdown-container__dropdown__content__link ">
                        Животные
                    </a>
                    <a href="/?categoryId=40882335-6243-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B8%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%98%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B5"
                       class="dropdown-container__dropdown__content__link ">
                        Исторические
                    </a>
                    <a href="/?categoryId=40882338-6243-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B8%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9D%D0%B0%D1%80%D0%BE%D0%B4%D0%BD%D1%8B%D0%B5+%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%B8%D0%B5"
                       class="dropdown-container__dropdown__content__link ">
                        Народные русские
                    </a>
                    <a href="/?categoryId=40882339-6243-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B8%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9D%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5"
                       class="dropdown-container__dropdown__content__link ">
                        Национальные
                    </a>
                    <a href="/?categoryId=40882340-6243-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B8%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9D%D0%BE%D0%B2%D0%BE%D0%B3%D0%BE%D0%B4%D0%BD%D0%B8%D0%B5"
                       class="dropdown-container__dropdown__content__link ">
                        Новогодние
                    </a>
                    <a href="/?categoryId=40882349-6243-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B8%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9E%D0%B2%D0%BE%D1%89%D0%B8"
                       class="dropdown-container__dropdown__content__link ">
                        Овощи
                    </a>
                    <a href="/?categoryId=8fa008d2-6300-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B8%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%9F%D1%82%D0%B8%D1%87%D0%BA%D0%B8"
                       class="dropdown-container__dropdown__content__link ">
                        Птички
                    </a>
                    <a href="/?categoryId=8fa008d6-6300-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B8%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%A1%D0%BA%D0%B0%D0%B7%D0%BE%D1%87%D0%BD%D1%8B%D0%B5+%D0%BF%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%B6%D0%B8"
                       class="dropdown-container__dropdown__content__link ">
                        Сказочные персонажи
                    </a>
                    <a href="/?categoryId=82285a8d-630a-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B8%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%A1%D1%82%D0%B8%D0%BB%D1%8F%D0%B3%D0%B8"
                       class="dropdown-container__dropdown__content__link ">
                        Стиляги
                    </a>
                    <a href="/?categoryId=82285a8e-630a-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B8%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%A4%D0%B5%D0%B8%2C+%D0%B1%D0%B0%D0%B1%D0%BE%D1%87%D0%BA%D0%B8%2C+%D0%BF%D1%87%D0%B5%D0%BB%D0%BA%D0%B8"
                       class="dropdown-container__dropdown__content__link ">
                        Феи, бабочки, пчелки
                    </a>
                    <a href="/?categoryId=82285ab2-630a-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B8%D0%B5+%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D1%8B-%D0%A4%D0%BE%D1%80%D0%BC%D0%B0"
                       class="dropdown-container__dropdown__content__link ">
                        Форма
                    </a>
                </div>
            </nav>


            <nav class="dropdown-container__dropdown">
                <input type="checkbox" class="dropdown-container__dropdown__checkbox"
                       id="accordion-82285ab5-630a-11e8-9c6d-b06ebf2a5f2f"
                       name="accordion-82285ab5-630a-11e8-9c6d-b06ebf2a5f2f">
                <label for="accordion-82285ab5-630a-11e8-9c6d-b06ebf2a5f2f"
                       class="dropdown-container__dropdown__label  ">
                    Подростковые
                </label>
                <div class="dropdown-container__dropdown__content">
                    <a href="/?categoryId=82285ab6-630a-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%9F%D0%BE%D0%B4%D1%80%D0%BE%D1%81%D1%82%D0%BA%D0%BE%D0%B2%D1%8B%D0%B5-%D0%90%D0%BD%D0%B3%D0%B5%D0%BB%D1%8B+%D0%B8+%D0%94%D0%B5%D0%BC%D0%BE%D0%BD%D1%8B"
                       class="dropdown-container__dropdown__content__link ">
                        Ангелы и Демоны
                    </a>
                    <a href="/?categoryId=82285abf-630a-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%9F%D0%BE%D0%B4%D1%80%D0%BE%D1%81%D1%82%D0%BA%D0%BE%D0%B2%D1%8B%D0%B5-%D0%9D%D0%B0%D1%80%D0%BE%D0%B4%D0%BD%D0%BE%D0%B5"
                       class="dropdown-container__dropdown__content__link ">
                        Народное
                    </a>
                    <a href="/?categoryId=82285ac2-630a-11e8-9c6d-b06ebf2a5f2f&amp;categoryName=%D0%9F%D0%BE%D0%B4%D1%80%D0%BE%D1%81%D1%82%D0%BA%D0%BE%D0%B2%D1%8B%D0%B5-%D0%A1%D1%82%D0%B8%D0%BB%D1%8F%D0%B3%D0%B8"
                       class="dropdown-container__dropdown__content__link ">
                        Стиляги
                    </a>
                </div>
            </nav>


        </nav>

        <div class="products">

        </div>

    </div>
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
        <a target="_blank" href="#">
            <img src="/images/fb.png" width="128px" height="128px" alt="">
        </a>
        <a target="_blank" href="#">
            <img src="/images/ig.png" width="128px" height="128px" alt="">
        </a>
        <a target="_blank" href="#">
            <img src="/images/vk.png" width="128px" height="128px" alt="">
        </a>
        <a target="_blank" href="#">
            <img src="/images/ok.png" width="128px" height="128px" alt="">
        </a>
    </div>
</div>
</body>
</html>