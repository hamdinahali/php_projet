<?php
require_once __DIR__.'/../config/database.php';
require_once __DIR__.'/../models/MatchModel.php';

if(!isset($_GET['id']) || !ctype_digit($_GET['id'])) {
    header("HTTP/1.0 404 Not Found");
    require __DIR__.'/../views/errors/404.php';
    exit;
}

$matchModel = new MatchModel($db);
$match = $matchModel->getMatchById((int)$_GET['id']);

if(!$match) {
    header("HTTP/1.0 404 Not Found");
    require __DIR__.'/../views/errors/404.php';
    exit;
}

$ticketCategories = $matchModel->getTicketCategories($match['id']);

require __DIR__.'/../views/header.php';
require __DIR__.'/../views/match.php';
require __DIR__.'/../views/footer.php';