<?php

require_once "conn.php";

$id = filter_input(INPUT_GET, 'id');

echo $id;

    //preparar
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");

    //trocar
    $stmt->bindValue(':id', $id);

    //executar
    $stmt->execute();

    //listar
    $list = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <form action="insertAction.php" method="post">
    <input type="hidden" name="id" value="<?= $list['id']?>">    
    <div>
            <label for="">Digite o Nome:</label>
            <input type="text" name="name" value="<?= $list['name']; ?>">
        </div>
        <div>
            <label for="">Digite o Email:</label>
            <input type="text" name="email" value="<?= $list['email']; ?>">
        </div>
        <div>
            <label for="">Digite seu Endereço:</label>
            <input type="text" name="address">
        </div>
        <div>
            <label for="">Digite a data de anivesário:</label>
            <input type="text" name="birthday">
        </div>
        <div>
            <button>Cadastrar</button>
        </div>
    </form>
</body>
</html>