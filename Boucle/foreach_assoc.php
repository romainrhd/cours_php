<?php

    $contact = [
        'nom' => 'RICHARD',
        'prenom' => 'Romain',
        'age' => '25',
        'metier' => 'Développeur',
    ];

    foreach ($contact as $cle => $valeur) {
        echo 'Votre '.$cle.' est '.$valeur."\n";
    }

?>