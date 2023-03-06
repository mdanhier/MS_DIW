<div class="container disc">
    <div class="row">
        <div class="col my-3">
            <div class="card border border-0">
                <div class="row g-0 justify-content-center">
                    <div class="col-12 card-body">
                        <form id="discform" method="POST" class="px-2 d-flex flex-column justify-content-between h-100">
                            <div class="row">
                                <label for="disctitle" class="d-inline-block col-12 col-lg-2 col-form-label col-form-label-lg">Titre</label>
                                <div class="col-12 col-lg-10">
                                    <input name="disctitle" id="disctitle" class="form-control form-control-lg" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <label for="artistid" class="d-inline-block col-12 col-lg-2 col-form-label col-form-label-lg">Artiste</label>
                                <div class="col-12 col-lg-10">
                                    <select name="artistid" id="artistid" class="form-select form-select-lg">
                                        <?php foreach ($artists as $artist) :
                                            if ($artist['artist_id'] == $discs['artist']['artist_id']) : ?>
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
                                    <input name="discyear" id="discyear" class="form-control form-control-lg" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <label for="disclabel" class="d-inline-block col-12 col-lg-2 col-form-label col-form-label-lg">Label</label>
                                <div class="col-12 col-lg-10">
                                    <input name="disclabel" id="disclabel" class="form-control form-control-lg" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <label for="discgenre" class="d-inline-block col-12 col-lg-2 col-form-label col-form-label-lg">Genre</label>
                                <div class="col-12 col-lg-10">
                                    <input name="discgenre" id="discgenre" class="form-control form-control-lg" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <label for="discprice" class="d-inline-block col-12 col-lg-2 col-form-label col-form-label-lg">Prix</label>
                                <div class="col-12 col-lg-10">
                                    <input name="discprice" id="discprice" class="form-control form-control-lg" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <label for="discpicture" class="d-inline-block col-12 col-lg-2 col-form-label col-form-label-lg">Jaquette</label>
                                <div class="col-12 col-lg-10">
                                    <input type="file" name="discpicture" id="discpicture" class="form-control form-control-lg" type="text">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-between my-5">
                    <a href="<?= HTMLROOT . '/discs' ?>" class="btn btn-lg w-25 btn-outline-primary">Retour</a>
                    <button type="submit" name="adddisc" form="discform" class="btn btn-lg w-25 btn-outline-warning">Ajouter</button>
                </div>
            </div>
        </div>
    </div>
</div>