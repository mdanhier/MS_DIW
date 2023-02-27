<?php
require("functions.php");

function myLink($url, $name)
{
    echo "<a href='" . $url . "'>" . $name . "</a>";
}

function sumArray($array)
{
    return array_sum($array);
}

function complexPassword($password)
{
    if (strlen($password) < 8)
        return false;
    if (!preg_match('/\d/', $password))
        return false;
    if (!preg_match('/[a-z]/', $password) || !preg_match('/[A-Z]/', $password))
        return false;
    return true;
}

head("exercice3");
nav("exercice3");
?>
<main role='main'>
    <div class='container mt-3'>
        <div class='row'>
            <div class='col'>
                <h3>
                    <?php
                    echo "Voici mon lien : ";
                    echo myLink("https://www.reddit.com/", "Reddit Hug");
                    ?>
                </h3>
            </div>
            <?php
            $tab = array(4, 3, 8, 2);
            ?>
            <div class='col'>
                <h3>
                    <?php
                    echo implode(" + ", $tab);
                    echo " = ";
                    echo sumArray($tab);
                    ?>
                </h3>
            </div>
            <div class='col'>
                <h3>
                    <?php
                    $password1 = "motdepasse";
                    echo "<h3>" . $password1;
                    if (complexPassword($password1))
                        echo " est valide !";
                    else
                        echo " est invalide.";
                    echo "</h3>";
                    $password2 = "motdepasse123";
                    echo "<h3>" . $password2;
                    if (complexPassword($password2))
                        echo " est valide !";
                    else
                        echo " est invalide.";
                    echo "</h3>";
                    $password3 = "Motdepasse";
                    echo "<h3>" . $password3;
                    if (complexPassword($password3))
                        echo "est valide !";
                    else
                        echo " est invalide.";
                    echo "</h3>";
                    $password4 = "Mot1234";
                    echo "<h3>" . $password4;
                    if (complexPassword($password4))
                        echo " est valide !";
                    else
                        echo " est invalide.";
                    echo "</h3>";
                    $password5 = "Motdepasse123";
                    echo "<h3>" . $password5;
                    if (complexPassword($password5))
                        echo " est valide !";
                    else
                        echo " est invalide.";
                    echo "</h3>";
                    ?>
                </h3>
            </div>
        </div>
    </div>
</main>
<?php foot();