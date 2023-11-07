<?php
$title = 'Буракова Полина Юрьевна 221-362 - Лабораторная работа №3';
$currentPage = 'forma'
?>
<!DOCTYPE html>
<html>
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
    <title>Форма обратной связи</title>
</head>
<body>
<main>
    <div class="authentication-container">
    <form action="https://httpbin.org/post" method="post">
        <div>
            <label for="fio">ФИО:</label>
            <input type="text" id="fio" name="fio" required>
        </div>

        <div>
            <label for="email">Ваш е‐майл:</label>
            <input type="text" id="email" name="email" placeholder="example@example.com" required>
        </div>

        <div>
            <label for="message">Сообщение:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>

        <div>
            <label for="theme">Тема обращения:</label>
            <select id="theme" name="theme" required>
                <option value="Предложение">Предложение</option>
                <option value="Жалоба">Жалоба</option>
            </select>
        </div>

        <div>
            <label>Источник информации:</label>
            <div>
                <input type="radio" id="internet" name="source" value="Реклама из интернета" required>
                <label for="internet">Реклама из интернета</label>
            </div>
            <div>
                <input type="radio" id="friends" name="source" value="Рассказали друзья" required>
                <label for="friends">Рассказали друзья</label>
            </div>
        </div>
        <div>
            <label for="consent">Даю согласие на обработку данных:</label>
            <input type="checkbox" id="consent" name="consent">
        </div>

        <div>
            <input type="submit" value="Отправить">
        </div>
    </form>
    </main>
<footer>
        <p>Контактная информация: +7(996)-138-62-58 | tvorozhok567@mail.ru</p>
        <div style="text-align:left">Сформировано <?=date('d.m.Y в H-i:s')?></div>
</footer> 
</body>
</html>