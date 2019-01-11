<?php

// On démarre la session
session_start();
// On vide le tableau de session
$_SESSION = [];
// On détruit la session
session_destroy();
// On redirige vers la page de connexion
header('Location: connexion.php');