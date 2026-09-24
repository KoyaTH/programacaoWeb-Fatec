<?php
$id = $_POST['id'];

if ($id != Null ||$id == 0){
    $api = "https://dummyjson.com/posts/$id";
}else{
    $api = "https://dummyjson.com/posts";
}


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
    echo "<a href='./consultar.php'>Voltar</a>";
    if ($id != Null || $id == 0){
        echo "<br>";
        echo "Id da postagem: ". $postagens['id']."<br>";
        echo "Titulo da postagem: ". $postagens['title']."<br>";
        echo "Corpo da postagem: ". $postagens['body']."<br>";
        echo "Tags da postagem: <ul>";
        foreach($postagens['tags'] as $tags){
            echo "<li>". $tags. "</li>";
        }
        echo "</ul><br>";
        echo "Likes da postagem: ". $postagens['reactions']['likes']."<br>";
        echo "Dislikes da postagem: ". $postagens['reactions']['dislikes']."<br>";
        
        echo "Id do usuario: ". $postagens['userId']."<br>";
        echo "<br>";
    }else{
    foreach($postagens['posts'] as $postagem){
        echo "<br>";
        echo "Id da postagem: ". $postagem['id']."<br>";
        echo "Titulo da postagem: ". $postagem['title']."<br>";
        echo "Corpo da postagem: ". $postagem['body']."<br>";
        echo "Tags da postagem: <ul>";
        foreach($postagem['tags'] as $tags){
            echo "<li>". $tags. "</li>";
        }
        echo "</ul><br>";
        echo "Id do usuario: ". $postagem['userId']."<br>";
        echo "<hr><br> ";
    }
    }
    
}


?>