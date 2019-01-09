<?php

require_once 'includes/connexion.php';

$query = $pdo->prepare('SELECT * FROM personnes WHERE id = :id');
$query->execute(['id' => $_GET['id']]);
$personne = $query->fetch(PDO::FETCH_ASSOC);

echo $personne['name'].' '.$personne['firstname'];