<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Enviando Dados</h1>
    <form action="resultado2.php" method="post">
        <label for="titulo">Titulo</label><br><br>
        <input type="text" name="titulo" id="titulo" required><br><br>
        <label for="body">Corpo da Mensagem</label><br><br>
        <input type="text" name="body" id="body" required><br><br>
        <label for="userId">ID do Usuario</label><br><br>
        <input type="number" name="userId" id="userId" required><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>