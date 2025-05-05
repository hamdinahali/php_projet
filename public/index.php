<?php
require_once __DIR__.'/../config/database.php';
require_once __DIR__.'/../models/MatchModel.php';

$matchModel = new MatchModel($db);
$upcomingMatches = $matchModel->getUpcomingMatches();

// Ajout de l'image train.jpg
$heroImage = '/php_projet/assets/images/tirain.jpg';

require __DIR__.'/../views/header.php';
require __DIR__.'/../views/home.php';
require __DIR__.'/../views/footer.php';