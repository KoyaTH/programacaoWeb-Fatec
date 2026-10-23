<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 22/10 - Deletando Dados</title>
</head>
<body>
    <button><a href="index.php">Menu</a></button> <br>
    <h2>Excluindo Dado de Aluno</h2>
    <p>Informe o código do aluno.</p>
    <form action="deletando.php" method="get">
        <label for="codigo">Código: </label>
        <input type="text" name="codigo" id="codigo" required> <br> <br>

        <button type="submit">Deletar</button>
    </form>
</body>
</html>