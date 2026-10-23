<?php
    include 'conexao.php';

    if(!isset($conexao)){
        die("Erro ao conectar no banco de dados");
    }

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO ALUNO (NOME, IDADE, EMAIL, TELEFONE) VALUES ('$nome', '$idade', '$email', '$telefone')";
    
    if(mysqli_query($conexao, $sql)){
        echo "Aluno cadastrado com sucesso <br>";
        echo '<button><a href="index.php">Menu</a></button> <br>';
        echo '<button><a href="paginaInserir.php">Voltar para o Cadastro</a></button> <br>';
    }else {
        echo "Erro ao cadastrar aluno <br>";
        echo '<button><a href="paginaInserir.php">Voltar para o Cadastro</a></button> <br>';
    }
?>