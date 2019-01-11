<?php
if (!isset($_SESSION['id']) && !isset($_SESSION['login'])) {
    header('Location: connexion.php');
}
?>