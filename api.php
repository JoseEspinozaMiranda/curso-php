<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
# Inicializar una nueva sesupin de cURL; ch = cURL handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado del petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutar la petición
y guardamos el resultado
 */
$result = curl_exec($ch);
// Una alternativa sería utilizar file_get_contents
// $result = file_get_contents(API_URL)
$data = json_decode($result, true);


curl_close($ch);


?>

<head>
    <title>La próxima película de Marvel</title>
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
</head>

<main>
    <!-- <pre style="font-size: 8px; overflow: scroll; height: 250px;">
        <?= var_dump($data); ?>
    </pre> -->
    <section>
        <img src="<?= $data['poster_url']; ?>" width="200" alt="Poster de <?= $data ?>" style="border-radius: 16px"> 
    </section>
    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?></h3>
    </hgroup>
    <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
    <p>La siguiente película es: <?= $data["following_production"]["title"]; ?></p>
</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
        text-align: center;
    }
    section {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
    img {
        margin: 0 auto;
    }
</style>