<?php
require("functions.php");

head("exercice1");
nav("exercice1");
?>
<main role='main'>
    <div class='container mt-3'>
        <div class='row'>
            <div class='col-1'>
                <?php
                for ($i = 1; $i < 150; $i += 2) {
                    echo "<p>" . $i . "</p>";
                }
                ?>
            </div>
            <div class='col-3'>
                <?php
                for ($j = 1; $j <= 500; $j++) {
                    echo "<p>Je dois faire des sauvegardes régulières de mes fichiers x" . $j . "</p>";
                }
                ?>
            </div>
            <div class='col-8'>
                <table class='table table-bordered table-striped table-hover'>
                    <?php
                    for ($k = -1; $k <= 12; $k++) {
                        if ($k == -1)
                            echo "<thead class='table-primary'>";
                        if ($k == 0)
                            echo "<tbody>";
                        echo "<tr>";
                        for ($j = -1; $j <= 12; $j++) {
                            if ($j == -1 && $k == -1)
                                echo "<th class='table-warning'>#</th>";
                            else if ($j == -1 && $k != -1)
                                echo "<th class='table-danger'>" . $k . "</th>";
                            else if ($k == -1 && $j != -1)
                                echo "<th>" . $j . "</th>";
                            else
                                echo "<td>" . $k * $j . "</td>";
                        }
                        echo "</tr>";
                        if ($k == -1)
                            echo "</thead>";
                        if ($k == 12)
                            echo "</tbody>";
                    }
                    ?>
                </table>
            </div>
        </div>
</main>
<?php foot();