<?php
require_once 'config/database.php';

try {
    $query = "SELECT * FROM matches LIMIT 1";
    $stmt = $db->query($query);
    $match = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($match) {
        echo "✅ Connexion à la base de données réussie !";
        echo "<pre>";
        print_r($match);
        echo "</pre>";
    } else {
        echo "⚠️ La table 'matches' est vide.";
    }
} catch(PDOException $e) {
    die("❌ Erreur : " . $e->getMessage());
}   