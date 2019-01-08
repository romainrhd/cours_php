<html>
    <head>
        <title>Formulaire de création d'un article</title>
    </head>
    <body>
        <form action="new_article_post.php" method="POST">
            <label for="name">Nom de l'article</label> : <input type="text" name="name"><br>
            <label for="quantity">Quantité</label> : <input type="number" name="quantity"><br>
            <input type="submit" value="Créer l'article">
        </form>
    </body>
</html>