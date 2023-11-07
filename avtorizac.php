<?php
$title = 'Буракова Полина Юрьевна 221-362 - Лабораторная работа №3';
$currentPage = 'avtorizac'
?>
<!DOCTYPE html>
<html long="ru">
<head>
        <title><?php echo $title; ?></title>
        <!-- задает заголовок документа, который будет отображаться во вкладке браузера. -->
        <meta charset="UTF-8">
        <!--устанавливает кодировку документа как UTF-8 для правильного отображения символов.-->
        <link rel="stylesheet" type="text/css" href="styles.css">
        <!-- подключает внешний CSS-файл для стилизации страницы. -->
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
        <!-- подключает внешний шрифт из Google Fonts для использования на странице. -->
</head>
<body>
<header>
            <!--открывающий тег для секции заголовка страницы.  -->
            <nav>
                <ul>
                  <li><a href="index.php">Главная</a></li>
                  <!-- пункт меню с ссылкой -->
                  <li><a href="forma.php">Обратная связь</a></li>
                  <li><a href="avtorizac.php">Авторизация</a></li>
                </ul>
                <!-- закрывающий тег для неупорядоченного списка (меню). -->
              </nav>
</header> 
<main>
    <div class="authentication-container">
        <h1>Вход в систему</h1>

        <div>
            <form action="https://httpbin.org/post" method="post">
            <label for="login">Логин:</label>
            <input type="text" id="login" name="login" required>
        </div>

        <div>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
        </div>


            <label for="remember">Запомнить меня:</label>
            <input type="checkbox" id="remember" name="remember">

        <div>
            <button type="submit">Войти</button>
        </div>
        
        </form>
    </div>
</main>
<footer>
        <p>Контактная информация: +7(996)-138-62-58 | tvorozhok567@mail.ru</p>
        <div style="text-align:left">Сформировано <?=date('d.m.Y в H-i:s')?></div>
</footer> 
</body>
</html>