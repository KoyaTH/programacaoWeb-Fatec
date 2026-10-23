<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08/10 - Inserir</title>
</head>
<body>
    <button><a href="index.php">Menu</a></button> <br>
    <h2>Cadastro de Aluno</h2>
    <p>Informe os dados do aluno.</p>
    <form action="cadastrando.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" required> <br> <br>
        
        <label for="idade">Idade: </label>
        <input type="text" name="idade" id="idade" required> <br> <br>
        
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required> <br> <br>

        <label for="telefone">Telefone: </label>
        <input type="text" name="telefone" id="telefone" required> <br> <br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>