<?php
// Configuration de base
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Autoloader simple
spl_autoload_register(function($class) {
    require __DIR__.'/../models/'.$class.'.php';
});

// Connexion BDD
$db = new PDO('mysql:host=localhost;dbname=football_reservation', 'root', '');