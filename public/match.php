<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

file_put_contents(__DIR__.'/debug.log', date('Y-m-d H:i:s')." - Accès à match.php\n", FILE_APPEND);

if(!isset($_GET['id'])) {
    file_put_contents(__DIR__.'/debug.log', "ERREUR: ID manquant\n", FILE_APPEND);
    header("HTTP/1.0 404 Not Found");
    include '404.php';
    exit;
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__.'/../config/database.php';
require_once __DIR__.'/../models/MatchModel.php';

// Vérification robuste de l'ID
if(!isset($_GET['id']) || !ctype_digit($_GET['id'])) {
    header("Location: ../views/errors/404.php");
    exit;
}

$matchId = (int)$_GET['id'];
$matchModel = new MatchModel($db);

error_reporting(0);
ini_set('display_errors', 0);

// Debug en fichier seulement
@file_put_contents(__DIR__.'/debug.log', date('Y-m-d H:i:s')." - Accès\n", FILE_APPEND);

// Le reste de votre code...
require __DIR__.'/../config/database.php';
// Debug : vérifiez que l'ID est bien reçu
file_put_contents('debug.log', "ID reçu: ".$matchId.PHP_EOL, FILE_APPEND);

$match = $matchModel->getMatchById($matchId);

if(!$match) {
    header("Location: ../views/errors/404.php");
    exit;
}

// Inclure les vues
$viewData = [
    'match' => $match,
    'ticketCategories' => $matchModel->getTicketCategories($matchId)
];

extract($viewData);
require __DIR__.'/../views/header.php';
require __DIR__.'/../views/match.php';
require __DIR__.'/../views/footer.php';