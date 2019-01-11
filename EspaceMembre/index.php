<?php
require_once 'includes/bdd.php';
require_once 'includes/verification.php';
?>
<p>Bienvenue sur notre site <?= $_SESSION['login'] ?> !</p>
<p><a href="deconnexion.php">Se déconnecter</a></p>
