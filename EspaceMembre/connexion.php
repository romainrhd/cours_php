<?php
require_once 'includes/bdd.php';

// On démarre la session
session_start();
// On teste si l'utilisateur est déjà connecté
if (isset($_SESSION['id']) && isset($_SESSION['login'])) {
    // On redirige sur la page d'accueil
    header('Location: index.php');
}

// On teste si le formulaire est submit
if (!empty($_POST)){
    // On prépare et execute la requête qui permet de récupérer l'utilisateur grâce au login passé dans le formulaire de connexion
    $req = $pdo->prepare('SELECT * FROM utilisateurs WHERE login = :login');
    $req->execute([
        'login' => $_POST['login']
    ]);
    $res = $req->fetch(PDO::FETCH_ASSOC);
    // On teste si le mot de passe est bon
    $mdpCorrect = password_verify($_POST['motdepasse'], $res['motdepasse']);

    // On teste si la requete de récupération de l'utilisateur à bien retourné un enregistrement
    if (!$res || !$mdpCorrect) {
        echo 'Mauvais login ou mot de passe !';
    } else {
        session_start();
        $_SESSION['id'] = $res['id'];
        $_SESSION['login'] = $res['login'];
        header('Location: index.php');
    }
}
?>

<form action="connexion.php" method="POST">
    <label for="login">Login : </label><input type="text" name="login" id="login"><br>
    <label for="motdepasse">Mot de passe : </label><input type="password" name="motdepasse" id="motdepasse"><br>
    <input type="submit" value="Se connecter">
</form>
<p><a href="inscription.php">Je n'ai pas encore de compte</a></p>
