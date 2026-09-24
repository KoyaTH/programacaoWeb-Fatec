<?php
$id = $_POST['id'];
$title = $_POST['title'];
$body = $_POST['body'];
$tags = explode(" ", $_POST['tags']);
$userId = $_POST['userId'];
$url = "https://dummyjson.com/posts/add";

$dadosEnviados = [
    "id" => $id,
    "title" => $title,
    "body" => $body,
    "tags" => $tags,
    "userId" => $userId
];

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($dadosEnviados));
curl_setopt($curl, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


$response = curl_exec($curl);
curl_close($curl);

$dadosRetornados = json_decode($response, true);

echo "<h3>Dados da Postagem: </h3> <br>";
echo "ID da Postagem: " . $dadosRetornados["id"] . "<br><br>";
echo "Titulo da Postagem: " . $dadosRetornados["title"] . "<br><br>";
echo "Corpo da Postagem: " . $dadosRetornados["body"] . "<br><br>";
echo "Tags da postagem: <ul>";
foreach ($dadosRetornados['tags'] as $tags) {
    echo "<li>" . $tags . "</li>";
}
echo "</ul><br>";
echo "ID do Usuario: " . $dadosRetornados["userId"] . "<br><br>";
echo "<a href='./cadastrar.php'>Voltar</a>";
