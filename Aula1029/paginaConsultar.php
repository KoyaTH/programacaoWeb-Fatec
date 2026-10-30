<?php
    include 'conexao.php';

    if(!isset($conexao)){
        die("Erro ao conectar no banco de dados");
    }

    $sql = "SELECT * FROM ALUNO;";
    $resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 22/10 - Consultando Dados</title>
</head>
<body>
    <button><a href="index.php">Menu</a></button> <br>
    <h3>Lista de alunos cadastrado</h3>
    <?php if($resultado->num_rows > 0) : ?>
        <table border="1" cellpading="5" cellspacing="0">
            <tr>
                <td>Código</td>
                <td>Nome</td>
                <td>Idade</td>
                <td>Email</td>
                <td>Telefone</td>
                <!-- <td>Atualizar</td> -->
                <td>Deletar</td>
            </tr>
            <?php while($linha = $resultado->fetch_assoc()) : ?>
                <tr>
                    
                    <td><?php echo $linha["CODIGO"]?></td>
                    <td><?php echo $linha["NOME"]?></td>
                    <td><?php echo $linha["IDADE"]?></td>
                    <td><?php echo $linha["EMAIL"]?></td>
                    <td><?php echo $linha["telefone"]?></td>
                    <td><?php echo "<button><a href='deletando.php?codigo=".$linha['CODIGO']."'>🗑️</a></button>"?></td>
                </tr>
                <?php endwhile; ?>
        </table>
        <?php else: ?>
            <p>Nenhum aluno cadastrado!</p>
        <?php endif;?>
</body>
<?php $conexao->close();?>
</html>