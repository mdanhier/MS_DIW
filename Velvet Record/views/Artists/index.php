<?php
head('Artistes - Accueil');
nav('artistIndex');
?>
<div class='container artistlist'>
    <div class='row row-cols-4'>
        <?php foreach ($artists as $artist) : ?>
            <div class="col my-3">
                <p><?= $artist['artist_name'] ?></p>
                <p><?= $artist['artist_id'] ?></p>
                <p>URL: <a href="<?= $artist['artist_url'] ?>"><?= $artist['artist_url'] ?></a></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
foot();
