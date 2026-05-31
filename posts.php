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
</head>

<body>
    <?php require("./includes/header.php");
    echo showHeader("./src/images/logo.png");
    ?>
    <main>
        <div class="post-box">
            <?php
            if ($result->num_rows > 0) {
                while ($post = $result->fetch_assoc()) {
                    echo "<h1>{$post['titre']}</h1>";
                }
            } else {
                $_SESSION["post_warning"] = "Aucun post pour le moment";
            }
            ?>
        </div>
    </main>
</body>

</html>