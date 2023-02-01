<?php
                                        $s = file_get_contents('http://ulogin.ru/token.php?token=' . $_POST['token'] . '&host=' . $_SERVER['HTTP_HOST']);
                    $user = json_decode($s, true);
                    //$user['network'] - соц. сеть, через которую авторизовался пользователь
                    //$user['identity'] - уникальная строка определяющая конкретного пользователя соц. сети
                    //$user['first_name'] - имя пользователя
                    //$user['last_name'] - фамилия пользователя
                
?>

<!doctype html>
<html lang="ru">
  <body style="background-color: aqua">
  <head>
    <title>Аккаунт YouMes</title>
    <link rel="icon" href="./img/logo.jpg" type="image/x-icon">
    <meta charset="UTF-8">
  </head>
    <header style="background-color: black; color: white; font-size: 50px; padding: 20px; margin: 10px"><img src="./img/logo.jpg" height="100" width="100">YouMes - лучший месенджер для школы. Аккаунт</header>
    <h1 style="font-size: 50px; color: blue; font-family: 'Monotype Corsiva', cursive, sans-serif">Привет, это страница твоего аккаунта.</h1>
    <p style="font-size: 50px; color: #6A5ACD; font-family: 'Сomic Sans MS', cursive, sans-serif">Выбери группу.</p>
    <a href="./Группы/Test.html" style="font-size: 50px; color: blueviolet; text-decoration: none">Test</a>
  </body>
<html>
