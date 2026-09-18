<?php
$id = $_POST['id'];
$title = $_POST['title'];
$body = $_POST['body'];
$userId = $_POST['userId'];

$dadosParaEnvio = array_filter([
    "title" => $title ?? "",
    "body" => $body ?? "",
    "userId" => $userId?? ""
], function($valor) {
    return trim($valor) !== "";
});


$api = "https://jsonplaceholder.typicode.com/posts/$id";

$curl = curl_init($api);

curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PATCH");
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($dadosParaEnvio));
curl_setopt($curl, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($curl);


if (curl_errno($curl))
    echo "Erro na requisição: ". curl_error($curl);
else {
    $dadosRetornados = json_decode($response, true);

    curl_close($curl);
    
    echo "Id da postagem: ". $dadosRetornados['id']."<br>";
    echo "Titulo da postagem: ". $dadosRetornados['title']."<br>";
    echo "Corpo da postagem: ". $dadosRetornados['body']."<br>";
    echo "Id do usuario: ". $dadosRetornados['userId']."<br>";
    echo "Usuario Atualizado com sucesso <br> ";
}
echo "<a href='./index.php'>Voltar</a>";

?>