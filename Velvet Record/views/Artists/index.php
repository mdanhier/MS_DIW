<?php
head('Artistes - Accueil');
nav('artistIndex');
?>
<div class='container artistlist'>
    <div class='row row-cols-4'>
        <?php
        foreach ($artists as $artist) {
            echo '<div class="col my-3">';
            echo '<p>' . $artist['artist_name'] . '</p>';
            echo '<p>' . $artist['artist_id'] . '</p>';
            echo '<p>URL: <a href="' . $artist['artist_url'] . '">' . $artist['artist_url'] . '</a></p>';
            echo '</div>';
        }
        ?>
    </div>
</div>
<?php
foot();
