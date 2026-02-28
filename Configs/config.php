<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'finance_login';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($conexao->connect_errno){
    echo "Falha ao conectar ao banco de dados: " . $conexao->connect_error;
} else {
    echo "Conectado com sucesso";
}
?>
