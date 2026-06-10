<?php
session_start();

$nom = $_SESSION["nom"];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon profil</title>
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/profil.css">
    <link rel="stylesheet" href="./styles/posts.css">
</head>

<body>
    <?php require("./includes/header.php");
    echo showHeader("./src/images/logo.png");

    echo "<h1 class='welcome-text'>Bonjour $nom</h1>";
    ?>
    <!-- <form method="post">
        <label for="nom">Nouveau nom:</label>
        <input type="text" id="nom" placeholder="Mettez votre nouveau nom...">
    </form> -->
    <div class="my-posts">
        <h2 class="your-posts-text">Vos posts</h2>
        <?php
        require("./includes/GetMyPosts.php");
        ?>
    </div>
</body>

</html>