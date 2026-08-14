<?php
    session_start();    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $_SESSION["usuario"] = $_POST["usuario"];
        header("Location: logado.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 - 13/08 - Sessão</title>
</head>
<body>
    <h3>Home</h3>
    <form action="#" method="POST">
    
    <label for="usuario">Usuário: </label>
    <input type="text" name="usuario" id="usuario" required> <br> <br>

    <button type="submit">Login</button>
    </form>
</body>
</html>