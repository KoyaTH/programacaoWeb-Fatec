<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 29/10 - Atualizar</title>
</head>
<body>
    <button><a href="index.php">Menu</a></button> <br>
    <h2>Atualizar cadastro de Aluno</h2>
    <p>Informe os dados do aluno.</p>
    <form action="atualizando.php" method="post">
        <label for="codigo">Código: </label>
        <input type="text" name="codigo" id="codigo" required> <br> <br>
        
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"> <br> <br>
        
        <label for="idade">Idade: </label>
        <input type="text" name="idade" id="idade"> <br> <br>
        
        <label for="email">Email: </label>
        <input type="email" name="email" id="email"> <br> <br>

        <label for="telefone">Telefone: </label>
        <input type="text" name="telefone" id="telefone"> <br> <br>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>