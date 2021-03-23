<?php 
include "connect.php";
session_start();
$link = mysqli_connect($domen, $login, $password, $db);

if($link->connect_error){
        die('Ошибка : ('.$link->connection_error.').');
}

$user_login = $_POST['username'];
$user_password = $_POST['password'];

$query = mysqli_query($link, 'SELECT*FROM users WHERE login="'.$user_login.'" AND password ="'.$user_password.'"');
$userInfo = mysqli_fetch_assoc($query);

if(!empty($userInfo)) {
    if($userInfo['status']=="admin"){
        header("Location: admin.php");
        exit();
    }
    header("Location: main.php");
    exit();
}
?>