<?php
$id = $_POST['id'];
$title = $_POST['title'];
$body = $_POST['body'];
$userId = $_POST['userId'];

$dadosParaAtualizar = [
    "id" => $id,
    "title" => $title,
    "body" => $body,
    "userId" => $userId
];


$url = "https://jsonplaceholder.typicode.com/posts/$id";

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($dadosParaAtualizar));
curl_setopt($curl, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($curl);

$dadosRetornados = json_decode($response, true);

curl_close($curl);

echo "Id da postagem: ". $dadosRetornados['id']."<br>";
echo "Titulo da postagem: ". $dadosRetornados['title']."<br>";
echo "Corpo da postagem: ". $dadosRetornados['body']."<br>";
echo "Id do usuario: ". $dadosRetornados['userId']."<br>";


echo "<a href='./index2.php'>Voltar</a>";
