<?php
    // On démarre notre session
    session_start();

    // Ajout de l'article dans notre session
    $_SESSION['articles'][$_GET['name']] = $_GET['quantity'];

    // Debug de la session
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';