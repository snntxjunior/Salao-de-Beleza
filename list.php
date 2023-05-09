<?php

require_once './conn.php';

//preparar
$stmt = $conn->prepare("SELECT * FROM users");

//executar
$stmt->execute();

//listar
$list = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($list);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Endereço</th>
            <th>Data de Anivesário</th>
        </tr>
            <?php foreach ($list as $row): ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['address']; ?></td>
            <td><?= $row['birthday']; ?></td>
            <td>
                <a href="update.php?id=<?= $row['id']; ?>">Editar</a>
                |
                <a href="delete.php?id=<?= $row['id']; ?>">Deletar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>