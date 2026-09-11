<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10/09 - API PUT</title>
</head>
<body>
    <h1>Atualização de Postagem</h1>
    <form action="editar.php" method="post">
        <label for="id">Informe o id da Postagem</label><br><br>
        <input type="text" name="id" id="id" required><br><br>

        <label for="title">Informe o Titulo da Postagem</label><br><br>
        <input type="text" name="title" id="title" required><br><br>

        <label for="body">Informe Texto da Postagem</label><br><br>
        <input type="text" name="body" id="body" required><br><br>

        <label for="userId">Informe o id do usuario</label><br><br>
        <input type="text" name="userId" id="userId" required><br><br>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>