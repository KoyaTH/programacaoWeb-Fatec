<?php
    $cep = $_POST['cep'];
    $url = "https://viacep.com.br/ws/$cep/json";

    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);
    curl_close($curl);

    $dadosRetornados = json_decode($response, true);

    echo "<h3>Dados do CEP: </h3> <br><br>";
    echo "CEP: ". $dadosRetornados["cep"]."<br><br>";
    echo "Logradouro: ". $dadosRetornados["logradouro"]."<br><br>";
    echo "Complemento: ". $dadosRetornados["complemento"]."<br><br>";
    echo "Bairro: ". $dadosRetornados["bairro"]."<br><br>";
    echo "UF: ". $dadosRetornados["uf"]."<br><br>";
    echo "Estado: ". $dadosRetornados["estado"]."<br><br>";
    echo "Localidade: ". $dadosRetornados["localidade"]."<br><br>";
    echo "<a href='./exercicio.php'>Voltar</a>";
?>
