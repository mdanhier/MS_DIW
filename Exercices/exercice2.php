<?php
require("functions.php");

head("exercice2");
nav("exercice2");
$months      = array(
    "Janvier" => 31,
    "Février" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Août" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Décembre" => 31,
);
$capitals    = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);
$departments = array(
    "Hauts-de-france" => array(
        "Aisne",
        "Nord",
        "Oise",
        "Pas-de-Calais",
        "Somme"
    ),
    "Bretagne" => array(
        "Côtes d'Armor",
        "Finistère",
        "Ille-et-Vilaine",
        "Morbihan"
    ),
    "Grand-Est" => array(
        "Ardennes",
        "Aube",
        "Marne",
        "Haute-Marne",
        "Meurthe-et-Moselle",
        "Meuse",
        "Moselle",
        "Bas-Rhin",
        "Haut-Rhin",
        "Vosges"
    ),
    "Normandie" => array(
        "Calvados",
        "Eure",
        "Manche",
        "Orne",
        "Seine-Maritime"
    )
);
?>
<main role='main'>
    <div class='container mt-3'>
        <div class='row'>
            <div class='col'>
                <table class='table table-bordered table-striped table-hover'>
                    <thead class='table-info'>
                        <tr>
                            <th>Mois</th>
                            <th>Jours</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($months as $name => $nbDays) {
                            echo "<tr><td>" . $name . "</td><td>" . $nbDays . "</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
            asort($months);
            ?>
            <div class='col'>
                <table class='table table-bordered table-striped table-hover'>
                    <thead class='table-info'>
                        <tr>
                            <th>Mois</th>
                            <th>Jours</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($months as $name => $nbDays) {
                            echo "<tr><td>" . $name . "</td><td>" . $nbDays . "</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <div class='row'>
            <div class='col'>
                <?php
                echo "<h1>Le tableau contient " . count($capitals) . " éléments.</h1>";
                ?>
            </div>
        </div>
        <div class="row">
            <?php
            $i = 1;
            ksort($capitals);
            ?>
            <div class='col'>
                <table class='table table-bordered table-striped table-hover'>
                    <thead class='table-info'>
                        <tr>
                            <th>Capitale</th>
                            <th>Pays</th>
                            <th>Numéro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($capitals as $name => $country) {
                            echo "<tr><td>" . $name . "</td><td>" . $country . "</td><td>" . $i . "</td></tr>";
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
            $i = 1;
            asort($capitals);
            ?>
            <div class='col'>
                <table class='table table-bordered table-striped table-hover'>
                    <thead class='table-info'>
                        <tr>
                            <th>Capitale</th>
                            <th>Pays</th>
                            <th>Numéro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($capitals as $name => $country) {
                            echo "<tr><td>" . $name . "</td><td>" . $country . "</td><td>" . $i . "</td></tr>";
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
            $i = 1;
            ?>
            <div class='col'>
                <table class='table table-bordered table-striped table-hover'>
                    <thead class='table-info'>
                        <tr>
                            <th>Capitale</th>
                            <th>Pays</th>
                            <th>Numéro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($capitals as $name => $country) {
                            if (str_starts_with($name, "B"))
                                unset($capitals[$name]);
                        }

                        foreach ($capitals as $name => $country) {
                            echo "<tr><td>" . $name . "</td><td>" . $country . "</td><td>" . $i . "</td></tr>";
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="row">
                <div class='col'>
                    <table class='table table-bordered table-striped table-hover'>
                        <thead class='table-info'>
                            <tr>
                                <th>Région</th>
                                <th>Département</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            ksort($departments);
                            foreach ($departments as $name => $region) {
                                echo "<tr><td>" . $name . "</td><td>" . implode(", ", $region) . "</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class='col'>
                    <table class='table table-bordered table-striped table-hover'>
                        <thead class='table-info'>
                            <tr>
                                <th>Région</th>
                                <th>Nombre de départements</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            ksort($departments);
                            foreach ($departments as $name => $region) {
                                echo "<tr><td>" . $name . "</td><td>" . count($region) . "</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<?php foot();