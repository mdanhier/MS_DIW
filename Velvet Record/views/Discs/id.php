<?php
head('Disque');
nav('discId');
?>
<div class="container disc">
    <div class="row">
        <div class="col my-3">
            <div class="card">
                <div class="row g-0">
                    <div class="col-4 d-flex align-items-center">
                        <img class="cover bg-velvet5" src="<?= ASSETS . '/img/' . $disc['disc_picture'] ?>" alt="<?= $disc['disc_picture'] ?>">
                    </div>
                    <div class="col-8">
                        <div class="col-12">
                            <div class="row card-body d-flex h-100 m-0 p-0 flex-column justify-content-between">
                                <p class="h1 m-2 p-0"><span class="d-inline-block w-25">Titre:
                                    </span><?= $disc['disc_title'] ?>
                                </p>
                                <p class="h1 m-2 p-0"><span class="d-inline-block w-25">Artiste: </span><a class="card-text link-velvet5" href="<?= $disc['artist_url'] ?>"><?= $disc['artist_name'] ?></a>
                                </p>
                                <p class="h2 m-2 p-0"><span class="d-inline-block w-25">Année:
                                    </span><?= $disc['disc_year'] ?>
                                </p>
                                <p class="h2 m-2 p-0"><span class="d-inline-block w-25">Label:
                                    </span><?= $disc['disc_label'] ?>
                                </p>
                                <p class="h2 m-2 p-0"><span class="d-inline-block w-25">Prix:
                                    </span><?= $disc['disc_price'] ?>€
                                </p>
                                <p class="h2 m-2 p-0" class="card-text"><span class="d-inline-block w-25">ID:
                                    </span><?= $disc['disc_id'] ?></p>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <button type="button" class="btn btn-lg m-2 w-25 btn-outline-primary">Retour</button>
                            <button type="button" class="btn btn-lg m-2 w-25 btn-outline-warning">Modifier</button>
                            <button type="button" class="btn btn-lg m-2 w-25 btn-outline-danger">Supprimer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
foot();
