<?php 
include "connect.php";

$link = mysqli_connect($domen, $login, $password, $db);

if($link->connect_error){
        die('Ошибка : ('.$link->connection_error.').');
}

$user_login = $_POST['username'];
$user_password = $_POST['password'];
$user_status = 'user';

$queryText = 'INSERT INTO users(login, password, status) VALUES ("'.$user_login.'", "'.$user_password.'", "'.$user_status.'")';

$query = mysqli_query($link, 'SELECT*FROM users WHERE login="'.$user_login.'" AND password ="'.$user_password.'" AND status = "'.$user_status.'"');

if(!mysqli_query($link, $queryText)) {
    echo "Регистрация не прошла!";
} else {
    header("Location: main.php");
    exit();
}
?>