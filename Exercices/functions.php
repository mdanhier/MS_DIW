<?php
function head($currentPageName)
{
    echo '<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <title>Exercice ' . $currentPageName . '</title>
    </head>
    <body>';
}

function nav($currentPageName)
{
    $pagesList = array(
        "Accueil" => "index",
        "Exercice 1" => "exercice1",
        "Exercice 2" => "exercice2",
        "Exercice 3" => "exercice3",
        "Exercice 4" => "exercice4",
        "Exercice 5" => "exercice5",
        "Exercice 6" => "exercice6",
    );
    echo '<header>
            <nav class="navbar navbar-dark navbar-expand-lg bg-dark py-3">
                <div class="container-fluid mx-5">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navBarToggleItems" aria-controls="navBarToggleItems" aria-expanded="false"
                        aria-label="Dérouler la navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navBarToggleItems">
                        <div class="navbar-nav">';
    foreach ($pagesList as $pageElement => $pageElementValue) {
        if ($currentPageName == $pageElementValue)
            echo '<a class="nav-link active" aria-current="page" href="' . $pageElementValue . '.php">' . $pageElement . '</a>';
        else
            echo '<a class="nav-link" href="' . $pageElementValue . '.php">' . $pageElement . '</a>';
    }
    echo '</div>
                        <hr class="d-lg-none">
                        <span class="ms-auto navbar-brand">Morgan Danhier</span>
                    </div>
                </div>
            </nav>
        </header>';
}

function foot()
{
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    </body>
    </html>';
}