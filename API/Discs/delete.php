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
    if (!empty($data->discid)) {
        $disc->disc_id = $data->discid;
        if ($disc->delete()) {
            http_response_code(200);
            echo json_encode(["Succès" => "La suppression a été effectuée."], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        } else {
            http_response_code(503);
            echo json_encode(["Erreur" => "La suppression n'a pas été effectuée."], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }
    } else {
        echo json_encode(["Erreur" => "Paramètre manquant."], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
} else {
    http_response_code(405);
    echo json_encode(["Erreur" => "Accès non autorisé."], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}
