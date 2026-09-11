<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10/09 - API Delete</title>
</head>
<body>
    <h1>Exclusão de Postagem</h1>
    <form action="excluir.php" method="post">
        <label for="codigo">Informe o código da Postagem</label><br><br>
        <input type="text" name="codigo" id="codigo" required><br><br>
        <button type="submit">Deletar</button>
    </form>
</body>
</html>