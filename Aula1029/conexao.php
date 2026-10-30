<?php

    $servidor = "sql213.infinityfree.com";
    $usuario = "if0_43308084";
    $senha = "GUIkauan";
    $banco = "if0_43308084_bdfaculdade";

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