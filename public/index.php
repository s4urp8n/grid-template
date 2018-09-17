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
            Модельесса
        </div>
        <label for="header-bar__checkbox" class="header-bar__label">
            <img src="/images/menu.svg" class="header-bar__label__open animated faster flip"/>
            <img src="/images/close.svg" class="header-bar__label__close animated faster rotateIn"/>
        </label>
    </div>
    <div class="header-content">
        HEADER<br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae culpa ea eum eveniet explicabo, ipsa laboriosam
        magni modi nemo, nulla odio perferendis provident quibusdam reiciendis sapiente tempora tempore voluptates
        voluptatibus?
    </div>
</div>
<div class="content">
    CONTENT<br>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias blanditiis delectus laborum maiores quisquam quo
    velit vitae! Ab at consequuntur debitis deserunt distinctio ipsa, iusto minima natus quas, soluta veniam!
</div>
<div class="footer">
    FOOTER<br>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur cum, deleniti dolores, earum error
    eveniet explicabo facilis nisi officia omnis quidem ratione, recusandae reprehenderit repudiandae soluta tenetur
    ullam vitae?
</div>
</body>
</html>