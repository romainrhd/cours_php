<?php

require_once 'includes/connexion.php';

// On prépare et execute la requete de suppression de la personne avec l'id passé dans l'url ($_GET)
$req = $pdo->prepare('DELETE FROM personnes WHERE id = :id');
$req->execute([
    'id' => $_GET['id'],
]);
// On redirige vers la page index.php
header('Location: index.php');