<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$idade = $_POST["idade"];
date_default_timezone_set("America/Sao_Paulo");

echo("Ta certo<br>");
echo("Bem Vindo: " . $usuario . "<br>"); 
echo("Data: " . date("Y-m-d H:i:s"). "<br>"); 
echo("Idade: ". $idade);


echo "<br><button><a href='index.php'>Voltar</a></button>"
?>
