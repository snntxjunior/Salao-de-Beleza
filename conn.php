<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "crud-pdo";

try {
    $conn = new PDO("mysql:host={$host}; dbname={$db}", $user, $password);
    //echo "Conexão realizada com sucesso!";
} catch (Exception $e) {
    echo "Erro na conexão: ". $e;
    //echo "Servidor instável, retorne em alguns minutos!";
}