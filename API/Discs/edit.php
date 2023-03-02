<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    include_once '../config/Database.php';
    include_once '../models/Discs.php';
    $database = new Database();
    $db = $database->getConnection();
    $disc = new Discs($db);
    if (!empty($datas->disc_id) && !empty($datas->disc_title) && !empty($datas->disc_year) && !empty($datas->disc_picture) && !empty($datas->disc_label) && !empty($datas->disc_genre) && !empty($datas->disc_price) && !empty($datas->artist_id)) {
        $disc->disc_id = $datas->disc_id;
        $disc->disc_title = $datas->disc_title;
        $disc->disc_year = $datas->disc_year;
        $disc->disc_picture = $datas->disc_picture;
        $disc->disc_label = $datas->disc_label;
        $disc->disc_genre = $datas->disc_genre;
        $disc->disc_price = $datas->disc_price;
        $disc->artist_id = $datas->artist_id;
        if ($disc->edit()) {
            http_response_code(200);
            echo json_encode(["message" => "La modification a été effectuée."]);
        } else {
            http_response_code(503);
            echo json_encode(["message" => "La modification n'a pas été effectuée."]);
        }
    }
} else {
    http_response_code(405);
    echo json_encode(["error" => "Accès non autorisé."]);
}
