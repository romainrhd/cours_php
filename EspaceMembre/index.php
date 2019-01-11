<?php
require_once 'includes/bdd.php';
// on inclut le fichier de vérification par rapport à la connexion
require_once 'includes/verification.php';
?>
<p>Bienvenue sur notre site <?= $_SESSION['login'] ?> !</p>
<p><a href="deconnexion.php">Se déconnecter</a></p>
