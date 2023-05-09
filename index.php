<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <form action="insert.php" method="post">
        <div>
            <label for="">Digite o Nome:</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="">Digite o Email:</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="">Digite seu Endereço:</label>
            <input type="text" name="address" id="address">
        </div>
        <div>
            <label for="">Digite a sua data de anivesário:</label>
            <input type="text" name="birthday" id="birthday">
        </div>
        <div>
            <button>Cadastrar</button>
        </div>
    </form>
</body>
</html>