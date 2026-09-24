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
            <button active="true"><a href="cadastrar.php">Cadastrar</a></button>
            <button><a href="atualizar.php">Atualizar Post</a></button>
            <button><a href="editar.php">Editar Post</a></button>
            <button><a href="delete.php">Deletar</a></button>
        </div>
    </nav>
    <h1>Cadastrar Posts</h1>
    <form action="atualizarAPI.php" method="post">
        <label for="id">Id da Postagem</label><br>
        <input type="text" name="id" id="id" required><br>

        <label for="title">Titulo</label><br>
        <input type="text" name="title" id="title"><br>

        <label for="body">Corpo da Mensagem</label><br>
        <textarea type="text" name="body" id="body"></textarea><br>

        <label for="tags">Tags da Postagem</label><br>
        <input type="text" name="tags" id="tags" placeholder="Separe por espaços"><br>

        <label for="userId">ID do Usuario</label><br>
        <input type="number" name="userId" id="userId" required><br>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>