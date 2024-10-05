<main>
    <section>
        <img src="<?= $poster_url; ?>" width="200" alt="Poster de" <?= $data["poster_url"]?>
        style="border-radius: 16px;"
        >
    </section>

    <hgroup>
        <h3> <?= $title; ?> - <?= $until_message; ?></h3>
        <p>Fecha de estreno <?= $release_date; ?></p>
        <p>La siguiente pelicula es: <?= $following_production;?></p>
    </hgroup>
    
</main>