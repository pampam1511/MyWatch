<?php
require_once "config/database.php";
require_once "app/models/Anime.php";
require_once "app/controllers/AnimeController.php";

$controller = new AnimeController();

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

switch($action) {

    case 'index':
        $controller->index();
        break;

    case 'show':
        $controller->show($id);
        break;

    case 'create':
        $controller->create();
        break;

    case 'store':
        $controller->store($_POST);
        break;

    case 'edit':
        $controller->edit($id);
        break;

    case 'update':
        $controller->update($id, $_POST);
        break;

    case 'delete':
        $controller->destroy($id);
        break;

    default:
        $controller->index();
        break;
}
?>