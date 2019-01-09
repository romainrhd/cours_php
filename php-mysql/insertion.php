<?php

require_once 'includes/connexion.php';

if (!empty($_POST)) {
    $req = $pdo->prepare('INSERT INTO personnes(name, firstname)
                                    VALUES(:name, :firstname)');
    $result = $req->execute([
        'name' => $_POST['name'],
        'firstname' => $_POST['firstname']
    ]);
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