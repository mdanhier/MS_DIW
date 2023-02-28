<?php
head('Disques - Accueil');
nav('discIndex');
?>
<div class="container disclist">
    <div class="row row-cols-lg-4 row-cols-sm-2">
        <?php foreach ($discs as $disc) : ?>
            <div class="col my-3">
                <div class="card">
                    <div class="card-header bg-velvet1">
                        <p class="h5 card-title"><?= $disc['disc_title'] ?></p>
                        <a class="card-text link-velvet5" href="<?= $disc['artist_url'] ?>"><?= $disc['artist_name'] ?></a>
                    </div>
                    <img class="cover bg-velvet5" src="<?= ASSETS . '/img/' . $disc['disc_picture'] ?>" alt="<?= $disc['disc_picture'] ?>">
                    <ul class="list-group list-group-flush">
                        <li class="bg-velvet2 list-group-item">Année: <?= $disc['disc_year'] ?></li>
                        <li class="bg-velvet2 list-group-item">Label: <?= $disc['disc_label'] ?></li>
                        <li class="bg-velvet2 list-group-item">Prix: <?= $disc['disc_price'] ?>€</li>
                    </ul>
                    <div class="card-footer bg-velvet">
                        <a href="<?= HTMLROOT . '/discs/id/' . $disc['disc_id'] ?>" class="link-velvet5">ID:
                            <?= $disc['disc_id'] ?></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
foot();
