<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    include_once '../config/Database.php';
    include_once '../models/Artists.php';
    include_once '../models/Discs.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $database = new Database();
        $db = $database->getConnection();
        $disc = new Discs($db);
        $artist = new Artists($db);
        $discSql = $disc->readOne($id);
        if ($discSql->rowCount() > 0) {
            $row = $discSql->fetch(PDO::FETCH_ASSOC);
            extract($row);
            $artistSql = $artist->readOne($artist_id);
            $artistDatas = $artistSql->fetch(PDO::FETCH_ASSOC);
            $disc = [
                "disc_id" => $disc_id,
                "disc_title" => $disc_title,
                "disc_year" => $disc_year,
                "disc_picture" => $disc_picture,
                "disc_label" => $disc_label,
                "disc_genre" => $disc_genre,
                "disc_price" => $disc_price,
                "artist" => $artistDatas,
            ];
            $arrayDiscs['discs'] = $disc;
            http_response_code(200);
            echo json_encode($arrayDiscs);
        } else {
            echo json_encode(["error" => "Aucune donnée dans la table."]);
        }
    } else {
        echo json_encode(["error" => "Erreur d'accès."]);
    }
} else {
    http_response_code(405);
    echo json_encode(["error" => "Accès non autorisé."]);
}
