<div class="container disc">
    <div class="row">
        <div class="col my-3">
            <div class="card border border-0">
                <div class="row g-0 justify-content-center">
                    <div class="col-6 col-lg-4 d-flex align-items-center">
                        <div class="cover-block p-3">
                            <img class="cover-out-list" src="<?= ASSETS . '/img/' . $discs['disc_picture'] ?>" alt="Jaquette <?= $discs['disc_picture'] ?>">
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 card-body">
                        <form id="discform" method="POST" class="px-2 d-flex flex-column justify-content-between h-100">
                            <div class="row">
                                <label for="disctitle" class="d-inline-block col-12 col-lg-2 col-form-label col-form-label-lg">Titre</label>
                                <div class="col-12 col-lg-10">
                                    <input name="disctitle" id="disctitle" class="form-control form-control-lg" type="text" value="<?= $discs['disc_title'] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label for="artistid" class="d-inline-block col-12 col-lg-2 col-form-label col-form-label-lg">Artiste</label>
                                <div class="col-12 col-lg-10">
                                    <select name="artistid" id="artistid" class="form-select form-select-lg">
                                        <?php foreach ($artists as $artist) :
                                            if ($artist['artist_id'] == $discs['artist_id']) : ?>
                                                <option value="<?= $artist['artist_id'] ?>" selected>
                                                <?php else : ?>
                                                <option value="<?= $artist['artist_id'] ?>">
                                                <?php endif; ?>
                                                <?= $artist['artist_name'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label for="discyear" class="d-inline-block col-12 col-lg-2 col-form-label col-form-label-lg">Année</label>
                                <div class="col-12 col-lg-10">
                                    <input name="discyear" id="discyear" class="form-control form-control-lg" type="text" value="<?= $discs['disc_year'] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label for="disclabel" class="d-inline-block col-12 col-lg-2 col-form-label col-form-label-lg">Label</label>
                                <div class="col-12 col-lg-10">
                                    <input name="disclabel" id="disclabel" class="form-control form-control-lg" type="text" value="<?= $discs['disc_label'] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label for="discprice" class="d-inline-block col-12 col-lg-2 col-form-label col-form-label-lg">Prix</label>
                                <div class="col-12 col-lg-10">
                                    <input name="discprice" id="discprice" class="form-control form-control-lg" type="text" value="<?= $discs['disc_price'] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label for="discpicture" class="d-inline-block col-12 col-lg-2 col-form-label col-form-label-lg">Jaquette</label>
                                <div class="col-12 col-lg-10">
                                    <input type="file" name="discpicture" id="discpicture" class="form-control form-control-lg" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <label class="d-inline-block col-12 col-lg-2 col-form-label col-form-label-lg">ID</label>
                                <div class="col-12 col-lg-10">
                                    <input type="text" name="discid" class="form-control-plaintext form-control-lg" readonly value="<?= $discs['disc_id'] ?>">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-between my-5">
                    <a href="<?= HTMLROOT . '/discs' ?>" class="btn btn-lg w-25 btn-outline-primary">Retour</a>
                    <button type="submit" name="alterdisc" form="discform" value="edit" class="btn btn-lg w-25 btn-outline-warning">Modifier</button>
                    <button type="submit" name="alterdisc" form="discform" value="delete" class="btn btn-lg w-25 btn-outline-danger">Supprimer</button>
                </div>
            </div>
        </div>
    </div>
</div>