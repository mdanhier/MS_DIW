<?php
function head(string $currentPageName)
{
    echo '<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/styles.css">
        <title>' . $currentPageName . '</title>
    </head>
    <body>';
}

function nav(string $currentPageName)
{
    echo '<header>
            <nav class="navbar navbar-dark navbar-expand-lg bg-danger py-3">
                <div class="container-fluid mx-5">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navBarToggleItems" aria-controls="navBarToggleItems" aria-expanded="false"
                        aria-label="Dérouler la navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navBarToggleItems">
                        <div class="navbar-nav">
                        <a class="ms-auto navbar-brand" href="./">Velvet Record</a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Disques
                                </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./discs">Liste</a></li>
                            </ul>
                            </li>
                        </ul>
                        </div>
                </div>
            </nav>
        </header>';
}

function foot()
{
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/scripts.js"></script>
    </body>
    </html>';
}
