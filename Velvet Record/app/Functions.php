<?php
function head(string $currentPageName)
{
    echo '<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="' . ASSETS . '/css/styles.css">
        <title>' . $currentPageName . '</title>
    </head>
    <body>';
}

function nav(string $currentPageName)
{
    echo '<header>
            <nav class="navbar navbar-dark navbar-expand-lg bg-velvet5 py-3">
                <div class="container-fluid mx-5">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navBarToggleItems" aria-controls="navBarToggleItems" aria-expanded="false"
                        aria-label="Dérouler la navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navBarToggleItems">
                        <div class="navbar-nav">
                        <a class="ms-auto navbar-brand" href="' . HTMLROOT . '">Velvet Record</a>
                        <li class="nav-item">';
    if ($currentPageName == 'discIndex')
        echo '<a class="nav-link active" href="' . HTMLROOT . '/discs">Disques</a>';
    else
        echo '<a class="nav-link" href="' . HTMLROOT . '/discs">Disques</a>';
    echo '</li>
                    </div>
                </div>
            </nav>
        </header>';
}

function foot()
{
    echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="' . ASSETS . '/js/scripts.js"></script>
    </body>
    </html>';
}
