<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

# Inicializar una nueva sesion de cURL; ch = cURL handle
$ch = curl_init(API_URL);
# Indicar que queremos recbir el resultado de la peticion y no mostrar la info
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

# Ejecutar la peticion y guardar

$result = curl_exec($ch);

# Una alternativa seria utilizar file_get_contents
# $result = file_get_contents(API_URL); // Si solo se quiere hacer un GET a la API

$data = json_decode($result, true);

curl_close($ch);
?>


<head>
    <meta charset="UTF-8">
    <title>La primera pelicula de Marvel</title>
    <meta name="description" content="La procima pelicula de Marvel">
    <meta name="viewpoert" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main>
    <section>
        <img src="<?= $data["poster_url"]; ?>" width="200" alt="Poster de" <?= $data["poster_url"]?>
        style="border-radius: 16px;"
        >
    </section>

    <hgroup>
        <h3> <?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> dias</h3>
        <p>Fecha de estreno <?= $data["release_date"]; ?></p>
        <p>La siguiente pelicula es: <?= $data["following_production"]["title"];?></p>
    </hgroup>
    
</main>



<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    img{
        margin: 0 auto;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>