<?php
$host = 'localhost';
$dbname = 'football_reservation';
$username = 'root';
$password = ''; // Pas de mot de passe par défaut avec XAMPP

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}