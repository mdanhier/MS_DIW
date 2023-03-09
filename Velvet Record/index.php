<?php
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
define('HTMLROOT', dirname(($_SERVER['SCRIPT_NAME'])));
define('ASSETS', HTMLROOT . '/assets');
require_once(ROOT . 'app/Controller.php');
require_once(ROOT . 'app/Functions.php');
$params = explode('/', $_GET['p']);
if ($params[0] != "") {
    $controller = ucfirst($params[0]);
    $action = isset($params[1]) ? $params[1] : 'index';
    if (file_exists(ROOT . 'controllers/' . $controller . '.php')) {
        require_once(ROOT . 'controllers/' . $controller . '.php');
        $controller = new $controller();
        if (method_exists($controller, $action)) {
            unset($params[0]);
            unset($params[1]);
            call_user_func_array([$controller, $action], $params);
        } else {
            http_response_code(418);
            echo "Teapot";
        }
    } else {
        http_response_code(404);
        echo "ERREUR 404";
    }
} else {
    require_once(ROOT . 'controllers/Main.php');
    $controller = new Main();
    $controller->index();
}