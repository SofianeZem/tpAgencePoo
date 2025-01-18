<?php

session_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once "View/header.php";
require_once "Repository/ConnectToDb.php";
require_once "Controller/LogementController.php";

$controller = new LogementController();

if (isset($_GET["action"])) {
    switch (true) {
        case $_GET["action"] === 'new':
            $controller->new();
            break;
        case $_GET["action"] === 'read':
            $controller->findAll();
            break;
        case $_GET["action"] === 'details':
            $controller->detail();
            break;

        default:
            $controller->findAll();
            break;
    }
} else {
    $controller->findAll();
    echo "<a class='link' href='?action=new'>Ajouter un bien</a>";
}
