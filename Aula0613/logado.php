<?php
session_start();
if(!isset($_SESSION["usuario"])){
    echo "Usuario não Logado!";
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado</title>
</head>
<body>
    <h4>Bem Vindo: </h4>
    <p> Usuário Logado: <?php echo $_SESSION["usuario"]; ?></p>
    <p><a href="logout.php">Sair da Conta</a></p>
</body>
</html>