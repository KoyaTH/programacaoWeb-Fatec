<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto - Aula 1</title>
</head>
<body>
    <h2>Formulário de Login</h2>
    <form action="login.php" method="post">
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario" id="usuario" required> <br><br>

        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" required> <br><br>

        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade"><br><br>
        <button type="submit">Login</button>

    </form>
</body>
</html> 