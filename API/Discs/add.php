<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once '../config/Database.php';
    include_once '../models/Discs.php';
    $database = new Database();
    $db = $database->getConnection();
    $disc = new Discs($db);
    $data = json_decode(file_get_contents("php://input"));
    if (!empty($data->disctitle) && !empty($data->discyear) && !empty($data->discpicture) && !empty($data->disclabel) && !empty($data->discgenre) && !empty($data->discprice) && !empty($data->artistid)) {
        $disc->disc_title = $data->disctitle;
        $disc->disc_year = $data->discyear;
        $disc->disc_picture = $data->discpicture;
        $disc->disc_label = $data->disclabel;
        $disc->disc_genre = $data->discgenre;
        $disc->disc_price = $data->discprice;
        $disc->artist_id = $data->artistid;
        if ($disc->add()) {
            http_response_code(200);
            echo json_encode(["Succès" => "L'ajout a été effectué."], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        } else {
            http_response_code(503);
            echo json_encode(["Erreur" => "L'ajout n'a pas été effectué."], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }
    } else {
        echo json_encode(["Erreur" => "Paramètre manquant."], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
} else {
    http_response_code(405);
    echo json_encode(["Erreur" => "Accès non autorisé."], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}
