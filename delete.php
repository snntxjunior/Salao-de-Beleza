<?php

require_once'./conn.php';

$id = filter_input(INPUT_GET, 'id');

echo $id;

    //preparar
    $stmt = $conn->prepare("DELETE FROM users WHERE id = :id");

    //trocar
    $stmt->bindValue(':id', $id);

    //executar
    $stmt->execute();
