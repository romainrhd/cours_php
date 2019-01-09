<?php

require_once 'includes/connexion.php';
require_once 'includes/head.php';

// On créé la requête SQL
$query = $pdo->prepare('SELECT * FROM personnes');
$query->execute();

// On récupère les personnes enregistrées en base de données
$personnes = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<h1>Liste des personnes</h1>
<table>
    <thead>
        <tr>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Voir</td>
            <td>Modifier</td>
            <td>Supprimer</td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($personnes as $personne) {
        ?>
            <tr>
                <td><?= $personne['name']?></td>
                <td><?= $personne['firstname']?></td>
                <td><a href="afficher.php?id=<?= $personne['id'] ?>">Voir</a></td>
                <td><a href="modifier.php?id=<?= $personne['id'] ?>">Modifier</a></td>
                <td><a href="supprimer.php?id=<?= $personne['id'] ?>" onclick="confirm('Etes-vous sur de vouloir supprimer la personne ?')">Supprimer</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<br>
<a href="insertion.php">Ajouter une personne</a>

<?php
require_once 'includes/footer.php';
?>
