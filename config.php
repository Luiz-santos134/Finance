<?php
$host = "localhost";
$user = "root";
$password = "password";
$db = "db_name";

$connection = new mysqli($host, $user, $password, $db);

if($connection->connect_error){
    die("Erro de conexão:" . $connection->connect_error);
}

ssession_start();
?>