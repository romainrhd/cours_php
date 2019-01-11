<?php
require_once 'includes/bdd.php';

session_start();
if (isset($_SESSION['id']) && isset($_SESSION['login'])) {
    header('Location: index.php');
}

if (!empty($_POST)){
    $req = $pdo->prepare('SELECT * FROM utilisateurs WHERE login = :login');
    $req->execute([
        'login' => $_POST['login']
    ]);
    $res = $req->fetch(PDO::FETCH_ASSOC);
    $mdpCorrect = password_verify($_POST['motdepasse'], $res['motdepasse']);

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
