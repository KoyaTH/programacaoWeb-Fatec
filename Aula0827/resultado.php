<?php
    $postagem = $_POST["postagem"];
    $urlAPI = "https://jsonplaceholder.typicode.com/posts/$postagem";

    $response = file_get_contents($urlAPI);
    $dadosRetornados = json_decode($response, true);

    echo "Código da Postagem: ". $dadosRetornados["id"]."<br><br>";
    echo "Titulo da Postagem: ". $dadosRetornados["title"]."<br><br>";
    echo "Texto da Postagem: ". $dadosRetornados["body"]."<br><br>";
    echo "Código do Usuario: ". $dadosRetornados["userId"]."<br><br>";
    echo "<a href='./index.php'>Voltar</a>";
?>
