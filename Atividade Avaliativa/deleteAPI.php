<?php
$id = $_POST['id'];

$url = "https://dummyjson.com/posts/$id";
$curl = curl_init($url);

curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);

if (curl_errno($curl)) {
    echo 'Erro na requisição: '. curl_error($curl);
} else {
    $dadosRetornados = json_decode($response, true);
    curl_close($curl);
    
    echo '<h3>Postagem deletada com sucesso.</h3>';
    echo 'ID da Postagem: '. $dadosRetornados['id'] .'<br>';
}
echo '<a href="./delete.php">Voltar</a>';
?>