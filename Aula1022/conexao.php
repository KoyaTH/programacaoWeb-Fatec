<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "FACULDADE";

    $conexao = mysqli_connect(
        $servidor,
        $usuario,
        $senha,
        $banco
    );

    if(!$conexao){
        die("Erro ao conectar no banco de dados");
    }

?>