<?php
session_start();
require("./config/config.php");
$result = $conn->query("SELECT * FROM posts");


?>
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
            if ($result->num_rows > 0) {
                while ($post = $result->fetch_assoc()) {

                    echo "
                     <div class='post-card'>
                        <div class='post-header'>
                            <img class='lotus-icon' src='./src/images/lotus_icon.png' alt='lotus_icon'/>
                            <h2 class='post-title'>{$post['titre']}</h2>
                        </div>
                     
                        <p class='post-content'>{$post['contenu']}</p>

                        <div class='post-footer'>
                            <p class='posted-by'>Publié par: </p>
                            <img src='./src/images/empty_like.png' class='like active' alt='like'/>
                        </div>
                     </div>
                    
                    ";
                }
            } else {
                $_SESSION["post_warning"] = "Aucun post pour le moment";
            }
            ?>
        </div>
    </main>
</body>

</html>