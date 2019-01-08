<?php

$continue = true;
$personnes = [];

while($continue) {
    $nom = readline('Entrer un nom : ');
    $prenom = readline('Entrer un prenom : ');
    $age = readline('Entrer votre age : ');

    $personnes[] = [
        'nom' => $nom,
        'prenom' => $prenom,
        'age' => $age
    ];

    $fini = readline('Avez-vous fini ? (o/n) ');
    if (strtolower($fini) === 'o') {
        $continue = false;
    }
}

foreach ($personnes as $personne) {
    if ($personne['age'] > 18) {
        echo $personne['prenom']."\n";
    }
}