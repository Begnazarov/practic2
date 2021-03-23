<?php 
$domen = "localhost";
$login = "root";
$password = "root";
$db = "authreg";

$link = mysqli_connect($domen, $login, $password, $db);

if($link->connect_error){
        die('Ошибка : ('.$link->connection_error.').');
}
?>