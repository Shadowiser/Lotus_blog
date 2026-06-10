<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotus-Accueil</title>
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/home.css">
    <link rel="stylesheet" href="./styles/posts.css">
</head>

<body>
    <?php require("./includes/header.php");
    echo showHeader("./src/images/logo.png");
    ?>
    <main>
        <div class="hero">
            <h1 class="main-title">Bienvenue sur <span class="lotus">Lotus</span></h1>
            <p class="desc-text">Le réseaux social convivial </p>
            <a href="dashboard.php"><button class="cta-btn">Poster un lotus</button></a>
        </div>
        <div id="all-posts">
            <?php

            require("./includes/GetPost.php");

            ?>
        </div>
    </main>
    <?php require("./includes/footer.php");
    echo showFooter();
    ?>
</body>

</html>