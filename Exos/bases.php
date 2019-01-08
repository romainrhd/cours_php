<?php

$personnes = [
    [
        'nom' => 'Dupont',
        'prenom' => 'Gilles',
        'age' => 56
    ],
    [
        'nom' => 'Richard',
        'prenom' => 'Romain',
        'age' => 25
    ],
    [
        'nom' => 'Henry',
        'prenom' => 'Alice',
        'age' => 12
    ]
];

foreach ($personnes as $personne) {
    if ($personne['age'] > 18) {
        echo $personne['prenom']."\n";
    }
}