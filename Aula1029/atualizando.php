<?php
    include 'conexao.php';

    if(!isset($conexao)){
        die("Erro ao conectar no banco de dados");
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $codigo = (int)$_POST['codigo'];
        $nome = $_POST['nome'];
        $idade = (int)$_POST['idade'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $campos = [];
        $valores = [];
        $tipos = "";

        if(!empty($nome)){
            $campos[] = "NOME = ?";
            $valores[] = $nome;
            $tipos .= "s"; 
        }
        if(!empty($idade)){
            $campos[] = "IDADE = ?";
            $valores[] = $idade;
            $tipos .= "i"; 
        }
        if(!empty($email)){
            $campos[] = "EMAIL = ?";
            $valores[] = $email;
            $tipos .= "s"; 
        }
        if(!empty($telefone)){
            $campos[] = "telefone = ?";
            $valores[] = $telefone;
            $tipos .= "s";
        }

        if(empty($campos)){
            die("Nenhum campo foi atualizado");
        }

        $sql = "UPDATE ALUNO SET " . implode(", ", $campos) . " WHERE CODIGO = ?;";
        $valores[] = $codigo;
        $tipos .= "i";

        $stm = $conexao->prepare($sql);
        $stm->bind_param($tipos, ...$valores);

        if($stm->execute()){
            echo "Aluno Atualizado com sucesso <br>";
            echo '<button><a href="index.php">Menu</a></button> <br>';
            echo '<button><a href="paginaConsultar.php">Voltar para a Tela de Consulta</a></button> <br>';
        }else{
            echo "Erro ao atualizar aluno <br>";
        }

        $stm->close();
        $conexao->close();
        echo '<button><a href="paginaAtualizar.php">Voltar para a Tela de Atualizar</a></button> <br>';
    }


?>