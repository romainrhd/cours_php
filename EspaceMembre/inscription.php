<?php
require_once 'includes/bdd.php';

session_start();
if (isset($_SESSION['id']) && isset($_SESSION['login'])) {
    header('Location: index.php');
}

if (!empty($_POST)){
    $req = $pdo->prepare('INSERT INTO utilisateurs (nom, prenom, login, motdepasse)
                                      VALUES (:nom, :prenom, :login, :motdepasse)');
    $req->execute([
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'login' => $_POST['login'],
        'motdepasse' => password_hash($_POST['motdepasse'], PASSWORD_DEFAULT),
    ]);
    header('Location: connexion.php');
}
?>
<form action="inscription.php" method="POST">
    <label for="nom">Nom : </label> <input type="text" name="nom" id="nom"><br>
    <label for="prenom">Prénom : </label> <input type="text" name="prenom" id="prenom"><br>
    <label for="login">Login : </label> <input type="text" name="login" id="login"><br>
    <label for="motdepasse">Mot de passe : </label> <input type="password" name="motdepasse" id="motdepasse"><br>
    <input type="submit" value="S'inscrire">
</form>
<p><a href="connexion.php">J'ai déjà un compte</a></p>
