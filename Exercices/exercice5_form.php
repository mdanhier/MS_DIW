<?php
require("functions.php");

function showData($dataArr)
{
    return json_encode($dataArr, JSON_PRETTY_PRINT);
}

head("exercice5");
nav("exercice5");
?>
<main role='main'>
    <div class='container mt-3'>
        <div class='row'>
            <?php
            if (isset($_POST)) // mise à jour
                echo "<pre>" . showData($_POST) . "</pre>";
            else
                echo "<p class='h5'> Aucune donnée n'a été transmise.</p>";
            ?>
        </div>
    </div>
</main>
<?php foot();