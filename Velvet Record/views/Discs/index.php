<div class="container disclist">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xxl-4">
        <?php foreach ($discs as $disc) : ?>
            <div class="col my-3">
                <div class="card">
                    <div class="card-header bg-velvet1">
                        <p class="h5 card-title"><?= $disc['disc_title'] ?></p>
                        <a class="card-text link-velvet5" href="<?= $disc['artist']['artist_url'] ?>"><?= $disc['artist']['artist_name'] ?></a>
                    </div>
                    <div class="cover-block bg-transparent">
                        <img class="cover-overlay z-1" src="<?= ASSETS . '/img/template/disc overlay.png' ?>">
                        <img class="cover-in-list z-0" src="<?= ASSETS . '/img/' . $disc['disc_picture'] ?>" alt="Jaquette <?= $disc['disc_picture'] ?>">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="bg-velvet2 list-group-item">Année: <?= $disc['disc_year'] ?></li>
                        <li class="bg-velvet2 list-group-item">Label: <?= $disc['disc_label'] ?></li>
                        <li class="bg-velvet2 list-group-item">Prix: <?= $disc['disc_price'] ?>€</li>
                    </ul>
                    <div class="card-footer bg-velvet">
                        <a href="<?= HTMLROOT . '/discs/onedisc/' . $disc['disc_id'] ?>" class="link-velvet5">ID:
                            <?= $disc['disc_id'] ?></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>