<?php
$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
$counter++;
setcookie("counter", $counter);

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/admin-style.css">
          <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Old+Standard+TT&display=swap&subset=cyrillic" rel="stylesheet">
        <title>Информатика</title>
    </head>
    <body>
        <header>
            <div class = "logo">
                <image src = "Images/Logo.png" alt = "Лого"></image>
            </div>
            <form class = "form-pos" action="index.html">
                <button class = "open">Выйти</button>
            </form>
        </header>       
        <main>
            <section>
                <div class="count">
                    <p>Счетчик посещений</p>
                    <div class="countbox1"><?=
                        $counter;
                    ?>
                    </div>
                </div>
                <div class="download">
                    <p>Счетчик скачиваний</p>
                    <div class="countbox2">a</div>
                </div>
                <div class="registr">
                    <p>Счетчик зарегстрированных</p>
                    <div class="countbox3">a</div>
                </div>
            </section>
        </main>
    </body>
</html>