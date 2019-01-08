<?php

    $compterPersonne = 0;

    while ($compterPersonne <= 50) {
        if ($compterPersonne != 50) {
            echo $compterPersonne.', ';
        } else {
            echo $compterPersonne;
        }
        $compterPersonne++;
    }

?>