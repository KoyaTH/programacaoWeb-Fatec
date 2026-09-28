<?php
$id = $_POST['id'];

$dadosParaEnvio = [];

if (isset($_POST['title']) && $_POST['title'] != '') {
    $dadosParaEnvio['title'] = $_POST['title'];
}
if (isset($_POST['body']) && $_POST['body'] != '') {
    $dadosParaEnvio['body'] = $_POST['body'];
}
if (isset($_POST['tags']) && $_POST['tags'] != '') {
    $dadosParaEnvio['tags'] = explode(' ', $_POST['tags']);
}
if (isset($_POST['userId']) && $_POST['userId'] != '') {
    $dadosParaEnvio['userId'] = $_POST['userId'];
}

if (empty($dadosParaEnvio)) {
    exit('Informe pelo menos um campo para editar. <a href="./editar.php">Voltar</a>');
}

$url = "https://dummyjson.com/posts/$id";
$curl = curl_init($url);

curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PATCH');
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($dadosParaEnvio));
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);

if (curl_errno($curl)) {
    echo 'Erro na requisição: '. curl_error($curl);
    } else {
        $dadosRetornados = json_decode($response, true);
        curl_close($curl);
        


       echo '<h3>Postagem editada:</h3><br>';
       echo 'ID da Postagem: '. $dadosRetornados['id']. '<br><br>';
       if (isset($dadosRetornados['title'])) {
           echo 'Titulo da Postagem: '. $dadosRetornados['title'] .'<br><br>';
        }

       if (isset($dadosRetornados['body'])) {
           echo 'Corpo da Postagem: '. $dadosRetornados['body'] .'<br><br>';
        }

       if (isset($dadosRetornados['tags'])) {
           echo 'Tags da postagem: <ul>';

           foreach ($dadosRetornados['tags'] as $tag) {
               echo '<li>'. $tag .'</li>';
           }

           echo '</ul><br>';
        }
        
       if (isset($dadosRetornados['userId'])) {
           echo 'ID do Usuario: '. $dadosRetornados['userId'] .'<br><br>';
        }
        
}

echo '<a href="./editar.php">Voltar</a>';
?>