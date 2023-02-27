<?php
require("functions.php");

head("exercice6");
nav("exercice6");
?>

<main role='main'>
    <div class='container mt-3'>
        <div class='row'>
            <div class="col">
                <?php
                foreach (file("assets/misc/liens.txt") as $line) {
                    echo "<p class='h4'><a href='" . $line . "'>" . $line . "</a></p>";
                }
                ;
                ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <p class="h3">J'ai pris un CSV trouvé sur le net car le lien des exercices était mort. Certaines données
                    peuvent paraîtres mal placées dans le tableau mais il s'agit bien du CSV formatté de manière
                    correcte.</p>
                <table class='table table-bordered table-striped table-hover'>
                    <?php
                    $i        = 0;
                    $csvDatas = file("https://raw.githubusercontent.com/neo4j-contrib/northwind-neo4j/master/data/customers.csv");
                    foreach ($csvDatas as $el) {
                        $elArr = explode(",", $el);
                        if ($i == 0)
                            echo "<thead class='table-primary'>";
                        if ($i == 1)
                            echo "<tbody>";
                        echo "<tr>";
                        foreach ($elArr as $subEl) {
                            echo "<td>" . $subEl . "</td>";
                        }
                        echo "</tr>";
                        if ($i == 0)
                            echo "</thead>";
                        if ($i == count($csvDatas))
                            echo "</tbody>";
                        $i++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</main>
<?php foot();