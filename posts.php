<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotus - Posts</title>
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/posts.css">
</head>

<body>
    <?php require("./includes/header.php");
    echo showHeader("./src/images/logo.png");
    ?>
    <h1 class="page-title">Tout les posts</h1>
    <main>
        <div class="posts-container">
            <?php
            require("./includes/GetPost.php")
            ?>
        </div>
    </main>
</body>

</html>