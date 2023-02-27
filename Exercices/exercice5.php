<?php
require("functions.php");

head("exercice5");
nav("exercice5");
?>
<div class="modal" tabindex="-1" id="formDataModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Données de votre formulaire</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div id="textFormData" class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" id="resetFormModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Réinitialiser le formulaire</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <p>Souhaitez-vous vraiment réinitialiser le formulaire ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal"
                    onclick="confirmReset()">Réinitialiser</button>
            </div>
        </div>
    </div>
</div>
<main role='main'>
    <div class='container mt-3'>
        <div class='row'>
            <form id="formContact" action="exercice5_form.php" method="POST" class="my-3 align-self-center">
                <fieldset>
                    <legend>Vos coordoonnées</legend>
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="tooltippopper d-none" id="tooltipFirstname" role="tooltip">
                                <span></span>
                                <div class="arrowpopper" data-popper-arrow>
                                </div>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="firstname" id="firstname"
                                    placeholder="Prénom*">
                                <label for="firstname" class="form-label text-muted">Prénom*</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="tooltippopper d-none" id="tooltipLastname" role="tooltip">
                                <span></span>
                                <div class="arrowpopper" data-popper-arrow>
                                </div>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="lastname" id="lastname"
                                    placeholder="Nom*">
                                <label for="lastname" class="form-label text-muted">Nom*</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="tooltippopper d-none" id="tooltipEmail" role="tooltip">
                                <span></span>
                                <div class="arrowpopper" data-popper-arrow>
                                </div>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail*">
                                <label for="email" class="form-label text-muted">E-mail*</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6 my-auto">
                            <div class="tooltippopper d-none" id="tooltipGender" role="tooltip">
                                <span></span>
                                <div class="arrowpopper" data-popper-arrow>
                                </div>
                            </div>
                            <div id="gender" class="d-flex justify-content-between align-items-center">
                                <label>Genre*</label>
                                <div class="form-check form-check-inline m-0">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                    <label class="form-check-label" for="male">Homme</label>
                                </div>
                                <div class="form-check form-check-inline m-0">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="female">
                                    <label class="form-check-label" for="female">Femme</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 my-auto">
                            <div class="tooltippopper d-none" id="tooltipBirth" role="tooltip">
                                <span></span>
                                <div class="arrowpopper" data-popper-arrow>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <label for="birth">Date de naissance*</label>
                                <input type="date" name="birth" id="birth">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">
                            <div class="form-floating">
                                <div class="tooltippopper d-none" id="tooltipZip" role="tooltip">
                                    <span></span>
                                    <div class="arrowpopper" data-popper-arrow>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="zip" id="zip" placeholder="Code postal*">
                                <label for="zip" class="form-label text-muted">Code postal*</label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="city" id="city" placeholder="Ville">
                                <label for="city" class="form-label text-muted">Ville</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="Adresse">
                                <label for="address" class="form-label text-muted">Adresse</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Votre demande</legend>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="tooltippopper d-none" id="tooltipTopic" role="tooltip">
                                <span></span>
                                <div class="arrowpopper" data-popper-arrow>
                                </div>
                            </div>
                            <select name="topic" id="topic">
                                <option value="" selected disabled>Veuillez sélectionner un sujet*</option>
                                <option value="orders">Mes commandes</option>
                                <option value="question">Question sur un produit</option>
                                <option value="complaint">Réclamation</option>
                                <option value="other">Autres</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="tooltippopper d-none" id="tooltipRequest" role="tooltip">
                                <span></span>
                                <div class="arrowpopper" data-popper-arrow>
                                </div>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" name="request" id="request" placeholder="Message*"
                                    rows="5"></textarea>
                                <label class="form-label text-muted" for="request">Message*</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="tooltippopper d-none" id="tooltipdataCB" role="tooltip">
                                <span></span>
                                <div class="arrowpopper" data-popper-arrow>
                                </div>
                            </div>
                            <div class="form-check d-flex justify-content-center align-items-center">
                                <input class="form-check-input my-0 me-3" type="checkbox" value="accept" name="dataCB"
                                    id="dataCB">
                                <label class="form-check-label">
                                    J'accepte le traitement informatique de ce formulaire*
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="row mt-3">
                    <div class="col-12 d-flex justify-content-between">
                        <button class="btn btn-warning" type="reset" onclick="return false" data-bs-toggle="modal"
                            data-bs-target="#resetFormModal">Réinitialiser</button>
                        <button class="btn btn-success">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
<?php foot();