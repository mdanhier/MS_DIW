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
    $database = new Database();
    $db = $database->getConnection();
    $artist = new Artists($db);
    $disc = new Discs($db);
    $artistSql = $artist->readAll();
    if ($artistSql->rowCount() > 0) {
        while ($artistRow = $artistSql->fetch(PDO::FETCH_ASSOC)) {
            extract($artistRow);
            $discSql = $disc->readAllByArtistId($artist_id);
            $discDatas = $discSql->fetchAll(PDO::FETCH_ASSOC);
            $artist = [
                "artist_id" => $artist_id,
                "artist_name" => $artist_name,
                "artist_url" => $artist_url,
                "discs" => $discDatas,
            ];
            $arrayArtists['artists'][] = $artist;
        }
        http_response_code(200);
        echo json_encode($arrayArtists);
    } else {
        echo json_encode(["error" => "Aucune donnée dans la table."]);
    }
} else {
    http_response_code(405);
    echo json_encode(["error" => "Accès non autorisé."]);
}
