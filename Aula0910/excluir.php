<?php
    $codigo = $_POST['codigo'];
    $url = "https://jsonplaceholder.typicode.com/posts/$codigo";

    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
    
    $response = curl_exec($curl);

    if (curl_errno($curl)){
            echo "Falha na Requisição: ". curl_errno($curl);
    }
    else{
        echo "Postagem: $codigo Deletada com sucesso<br><br>"; 
    }

    curl_close($curl);

    echo "<a href='./index.php'>Voltar</a>";
?>