<?php
$api = "https://jsonplaceholder.typicode.com/posts";

$curl = curl_init($api);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($curl);


if (curl_errno($curl))
    echo "Erro na requisição: ". curl_error($curl);
else {
    $postagens = json_decode($response, true);

    curl_close($curl);
    echo "<h3>Lista de postagens</h3>";

    foreach($postagens as $postagem){
        echo "<br>";
        echo "Id da postagem: ". $postagens['id']."<br>";
        echo "Titulo da postagem: ". $postagens['title']."<br>";
        echo "Corpo da postagem: ". $postagens['body']."<br>";
        echo "Id do usuario: ". $postagens['userId']."<br>";
        echo "Usuario Atualizado com sucesso <br> ";
        echo "<br>";
    }
    
}
echo "<a href='./index.php'>Voltar</a>";

?>