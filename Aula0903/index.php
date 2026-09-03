<?php
    $apikey = "PkIEGyaGSEZkTm990POo8p3phVKyJV0My2yrGVCQ";
    $url = "https://api.nasa.gov/planetary/apod?api_key=$apikey";

    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);
    curl_close($curl);

    $dadosRetornados = json_decode($response, true);

    echo "<h3>Dados da Imagem do Dia - NASA: </h3> <br><br>";
    echo "Titulo: ". $dadosRetornados["title"]."<br><br>";
    echo "Data: ". $dadosRetornados["date"]."<br><br>";
    echo "Texto Explicativo: ". $dadosRetornados["explanation"]."<br><br>";
    echo 'Imagem: <img src="'. $dadosRetornados["url"].'">';
    echo "<a href='./index2.php'>Voltar</a>";
?>