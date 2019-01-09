<?php
try {
    $dsn_bdd = 'mysql:host=mysql;dbname=cours';
    $user_bdd = 'root';
    $pass_bdd = 'toor';
    $options = [
        // Affiche les erreurs de type MySQL
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    $pdo = new PDO($dsn_bdd, $user_bdd, $pass_bdd, $options);
} catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
}
