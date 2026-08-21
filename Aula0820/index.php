<?php
     if($_SERVER["REQUEST_METHOD"] == "POST"){
        setcookie("cor_usuario", $_POST["cor"], time()+3600);
        setcookie("idioma_usuario", $_POST["idioma"], time()+3600);
        header("Location: index.php");
        exit();
    }  
    $cor_fundo = isset($_COOKIE["cor_usuario"]) ? $_COOKIE["cor_usuario"] : "FFFFFF";
    $idioma_padrao = isset($_COOKIE["idioma_usuario"]) ? $_COOKIE["idioma_usuario"] : "pt";
?>      

<!DOCTYPE html>
<html lang="<?php echo $idioma_padrao;?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 20/08 - Usando Cookies</title>
</head>
<body style="background-color: <?php echo $cor_fundo ?>;">
    <h1>Bem-vindo</h1>
    <h2>Preferência do usuário</h2>
    <form action="#" method="post">
        <label for="cor">Escolha a cor desejada</label><br>
        <input type="color" required name="cor" value="<?php echo $cor_fundo; ?>"> <br><br>
        <select name="idioma" id="idioma" required>
            <option value="pt" <?php if ($idioma_padrao === 'pt') echo 'selected';?>>Português</option>
            <option value="en" <?php if ($idioma_padrao === 'en') echo 'selected';?>>Inglês</option>
            <option value="es" <?php if ($idioma_padrao === 'es') echo 'selected';?>>Espanhol</option>
            <option value="fr" <?php if ($idioma_padrao === 'fr') echo 'selected';?>>Francês</option>
            <option value="de" <?php if ($idioma_padrao === 'de') echo 'selected';?>>Alemão</option>
            <option value="zh" <?php if ($idioma_padrao === 'zh') echo 'selected';?>>Chinês</option>
            <option value="ja" <?php if ($idioma_padrao === 'ja') echo 'selected';?>>Japonês</option>
            <option value="ru" <?php if ($idioma_padrao === 'ru') echo 'selected';?>>Russo</option>
            <option value="it" <?php if ($idioma_padrao === 'it') echo 'selected';?>>Italiano</option>
            <option value="ar" <?php if ($idioma_padrao === 'ar') echo 'selected';?>>Árabe</option>
        </select>
        <p>Idioma: <?php echo $idioma_padrao;?></p>
        <button type="submit">Aplicar</button> 
    </form> <br><br>

    <a href="limpar.php" >Restaurar</a>
</body>
</html>