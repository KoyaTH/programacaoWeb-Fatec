<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Individual – Consumo de API com PHP e cURL</title>
</head>
<body>
    <nav>
        <div>
            <button><a href="consultar.php">Consultar</a></button>
            <button><a href="cadastrar.php">Cadastrar</a></button>
            <button><a href="atualizar.php">Atualizar Post</a></button>
            <button><a href="editar.php">Editar Post</a></button>
            <button><a href="delete.php">Deletar</a></button>
        </div>
    </nav>
    <h1>Deletar Post</h1>
    <form action="deleteAPI.php" method="post">
        <label for="id">Id da Postagem</label><br>
        <input type="number" name="id" id="id" required><br>
        <button type="submit">Deletar</button>
    </form>
</body>
</html>