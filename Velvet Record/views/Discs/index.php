<?php
head('Disques - Accueil');
nav('discIndex');
?>
<div class="container disclist">
    <div class="row row-cols-4">
        <?php
        foreach ($discs as $disc) {
            echo '<div class="col my-3">';
            echo '<div class="card border-info" style="width: 18rem;">';
            echo '<img src="./assets/img/' . $disc['disc_picture'] . '" class="card-img-top" alt="' . $disc['disc_picture'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $disc['disc_title'] . '</h5>';
            echo '<p class="card-text">' . $disc['artist_id'] . '</p>';
            echo '</div>';
            echo '<ul class="list-group list-group-flush">';
            echo '<li class="list-group-item">Année: ' . $disc['disc_year'] . '</li>';
            echo '<li class="list-group-item">Label: ' . $disc['disc_label'] . '</li>';
            echo '<li class="list-group-item">Prix: ' . $disc['disc_price'] . '€</li>';
            echo '</ul>';
            echo '<div class="card-footer">';
            echo '<small class="text-muted">ID: ' . $disc['disc_id'] . '</small>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>
<?php
foot();
