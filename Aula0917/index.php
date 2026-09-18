<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 17/09 - API Patch</title>
</head>
<body>
    <h1>Atualização de Postagem (parcial)</h1>
    <form action="atualizar.php" method="post">
        <label for="id">Id da Postagem</label><br><br>
        <input type="text" name="id" id="id" required><br><br>

        <label for="title">Titulo da Postagem</label><br><br>
        <input type="text" name="title" id="title"><br><br>

        <label for="body">Corpo da Postagem</label><br><br>
        <input type="text" name="body" id="body"><br><br>

        <label for="userId">Id do Usuario</label><br><br>
        <input type="text" name="userId" id="userId"><br><br>
        
        <button type="submit">Atualizar</button>
    </form>
    <br>
    <a href="./listar.php">Postagens</a>
</body>
</html>