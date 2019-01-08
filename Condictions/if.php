<?php
    $nb = readline('Votre nombre : ');
    if ($nb < 10) {
        echo "Le nombre $nb est inférieur à 10";
    } elseif ($nb > 10) {
        echo "le nombre $nb est supérieur à 10";
    } else {
        echo "Le nombre $nb est égal à 10";
    }
?>