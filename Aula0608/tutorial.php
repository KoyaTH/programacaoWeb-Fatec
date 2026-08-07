<?php 

//Criar Variavel
$nome = "Kauan";

// print() em python -> 'Echo' aparecer nada tela
echo("Bem Vindo: " . $nome . "<br>"); //Concatenar é o '.' / Dá para usar elementos do HTML no PHP 
date_default_timezone_set("America/Sao_Paulo"); // fuso horario
echo("Data: " . date("Y-m-d H:i:s")); // date("Y-m-d H:i:s") = data de hone ano/mes/dia hora/minuto/segundo
?>