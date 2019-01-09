<?php
require_once 'includes/connexion.php';

if (!empty($_POST)) {
    $query = $pdo->prepare('UPDATE personnes
                                      SET name = :name, firstname = :firstname
                                      WHERE id = :id');
    $query->execute([
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'firstname' => $_POST['firstname'],
    ]);
    header('Location: index.php');
} else {
    require_once 'includes/head.php';
    $query = $pdo->prepare('SELECT * FROM personnes WHERE id = :id');
    $query->execute([
        'id' => $_GET['id']
    ]);
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