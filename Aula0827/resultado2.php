<?php
    $pokemon = $_POST["pokemon"];
    $urlAPI = "https://pokeapi.co/api/v2/pokemon/$pokemon";

    $curl = curl_init($urlAPI);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);
    curl_close($curl);

    $dadosRetornados = json_decode($response, true);

    echo "<h2>Dados do Pokemon: </h2> <br><br>";
    echo "Código do pokemon: ". $dadosRetornados["id"]."<br><br>";
    echo "Nome do pokemon: ". $dadosRetornados["name"]."<br><br>";
    echo "Experiencia: ". $dadosRetornados["base_experience"]."<br><br>";
    echo 'Imagem do pokemon: <img src="'. $dadosRetornados["sprites"]["front_default"].'">';
    echo '<img src="'. $dadosRetornados["sprites"]["back_default"].'"><br><br>';
    echo "Peso do pokemon: ". $dadosRetornados["weight"]."<br><br>";
    echo "Altura do pokemon: ". $dadosRetornados["height"]."<br><br>";
    echo "Tipo: ". $dadosRetornados["types"]["type"]["name"]."<br><br>";
    echo "<a href='./index2.php'>Voltar</a>";
?>
