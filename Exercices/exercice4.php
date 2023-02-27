<?php
require("functions.php");

head("exercice4");
nav("exercice4");
?>
<main role='main'>
    <div class='container mt-3'>
        <div class='row'>
            <div class='col'>
                <?php
                $date1       = DateTime::createFromFormat("d/m/Y", "14/07/2019");
                $errorsDate1 = DateTime::getLastErrors();
                echo "<p class='h3'> Le numéro de semaine du 14/07/2019 est le " . $date1->format("W") . "</p>";
                ?>
            </div>
        </div>
        <hr>
        <div class='row'>
            <div class='col'>
                <?php
                $today       = new Datetime;
                $date2       = DateTime::createFromFormat("d/m/Y H:i:s", "10/03/2023 17:00:00");
                $errorsDate2 = DateTime::getLastErrors();
                echo "<p class='h3'>Nous sommes le " . $today->format("d/m/Y") . ".</p>";
                echo "<p class='h3'>Il reste " . ($date2->diff($today))->format("%a") . " jours avant la fin de la formation.</p>";
                ?>
            </div>
            <div class="col">
                <p class="h3">Ma formation actuelle se termine le 10/03/2023</p>
            </div>
        </div>
        <hr>
        <div class='row'>
            <div class='col'>
                <?php
                $date3_1       = DateTime::createFromFormat("Y", "1999");
                $errorsDate3_1 = DateTime::getLastErrors();
                $date3_2       = DateTime::createFromFormat("Y", "2000");
                $errorsDate3_2 = DateTime::getLastErrors();
                $date3_3       = DateTime::createFromFormat("Y", "2004");
                $errorsDate3_3 = DateTime::getLastErrors();
                $date3_4       = DateTime::createFromFormat("Y", "2100");
                $errorsDate3_4 = DateTime::getLastErrors();
                $date3_5       = DateTime::createFromFormat("Y", "2400");
                $errorsDate3_5 = DateTime::getLastErrors();
                echo "<p class='h3'>" . $date3_1->format("Y");
                if ($date3_1->format("L"))
                    echo " est ";
                else
                    echo " n'est pas ";
                echo "une année bissextile.</p>";
                echo "<p class='h3'>" . $date3_2->format("Y");
                if ($date3_2->format("L"))
                    echo " est ";
                else
                    echo " n'est pas ";
                echo "une année bissextile.</p>";
                echo "<p class='h3'>" . $date3_3->format("Y");
                if ($date3_3->format("L"))
                    echo " est ";
                else
                    echo " n'est pas ";
                echo "une année bissextile.</p>";
                echo "<p class='h3'>" . $date3_4->format("Y");
                if ($date3_4->format("L"))
                    echo " est ";
                else
                    echo " n'est pas ";
                echo "une année bissextile.</p>";
                echo "<p class='h3'>" . $date3_5->format("Y");
                if ($date3_5->format("L"))
                    echo " est ";
                else
                    echo " n'est pas ";
                echo "une année bissextile.</p>";
                ?>
            </div>
            <div class="col">
                <p class="h3">Pour vérifier si une année est bissextile, il suffit de faire $variable->format("L"), la
                    fonction renverra 0 si elle n'est pas bissextile, 1 si elle l'est.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <?php
                $date4       = DateTime::createFromFormat("d/m/Y", "32/17/2019");
                $errorsDate4 = DateTime::getLastErrors();
                echo "<p class='h3'>Le 32/17/2019 est erronée, PHP nous donne l'erreur suivante :</p><pre>" . json_encode($errorsDate4, JSON_PRETTY_PRINT) . "</pre>";
                ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <?php
                echo "<p class='h3'>Il est actuellement " . $today->format("H\hi") . "</p>";
                ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <?php
                $oneMonthForward = $today->modify("+1 month");
                echo "<p class='h3'>La date du mois prochain est le " . $today->format("d/m/Y") . "</p>";
                ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <?php
                $date5 = Datetime::createFromFormat('U', 1000200000);
                echo "<p class='h3'>Le " . $date5->format("d/m/Y") . " il s'est passé plusieurs choses : </p>";
                ?>
                <ul>
                    <li>
                        <p class='h4'>Attentats du 11 septembre 2001 aux États-Unis provoquant la mort de 2 977
                            personnes.</p>
                    </li>
                    <li>
                        <p class='h4'>Adoption par l'Organisation des États américains de l'Inter-American Democratic
                            Charter, à Lima au Pérou.</p>
                    </li>
                    <li>
                        <p class='h4'>Sortie de 'Des visages des figures' le jour des attentats de New York, album
                            musical de Noir Desir sur lequel se trouve la chanson 'Le Grand Incendie'.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>
<?php foot();