<?php
    // On démarre notre session
    session_start();

    $_SESSION['articles'][$_POST['name']] = $_POST['quantity'];
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';