<?php
require_once 'includes/connexion.php';

// On teste si le formulaire a été submit
if (!empty($_POST)) {
    // On prépare et execute la requete de modification d'une personne
    $query = $pdo->prepare('UPDATE personnes
                                      SET name = :name, firstname = :firstname
                                      WHERE id = :id');
    $query->execute([
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'firstname' => $_POST['firstname'],
    ]);
    // On redirige vers la page index.php
    header('Location: index.php');
} else {
    // Sinon on récupère les informations de l'utilisateur et on affiche le formulaire de modification
    require_once 'includes/head.php';
    // On prépare et execute la requete de récupération des données de la personne
    $query = $pdo->prepare('SELECT * FROM personnes WHERE id = :id');
    $query->execute([
        'id' => $_GET['id']
    ]);
    // On enregistre dans la variable $personne le resutlat de la requête
    $personne = $query->fetch(PDO::FETCH_ASSOC);
}
?>

<form action="modifier.php" method="POST">
    <label for="">Nom</label> <input type="text" name="name" value="<?= $personne['name'] ?>"><br>
    <label for="">Prénom</label> <input type="text" name="firstname" value="<?= $personne['firstname'] ?>"><br>
    <input type="hidden" name="id" value="<?= $personne['id'] ?>">
    <input type="submit" value="Modifier">
</form>

<?php
require_once 'includes/footer.php';
?>