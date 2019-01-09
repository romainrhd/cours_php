<?php

require_once 'includes/connexion.php';

// On teste si notre formulaire a été submit
if (!empty($_POST)) {
    // On prépare et execute la requete d'insertion d'une nouvelle personne
    $req = $pdo->prepare('INSERT INTO personnes(name, firstname)
                                    VALUES(:name, :firstname)');
    $result = $req->execute([
        'name' => $_POST['name'],
        'firstname' => $_POST['firstname']
    ]);
    // On redirige vers la page index.php
    header('Location: index.php');
}
require_once 'includes/head.php';
?>

<form action="insertion.php" method="POST">
    <label for="">Nom</label> <input type="text" name="name"><br>
    <label for="">Prénom</label> <input type="text" name="firstname"><br>
    <input type="submit" value="Créer">
</form>

<?php
require_once 'includes/footer.php';
?>