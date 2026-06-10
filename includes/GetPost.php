<?php
session_start();
require("./config/config.php");
$result = $conn->query("SELECT posts.titre, posts.contenu, users.nom AS author
FROM posts
JOIN users
ON posts.user_id = users.id");
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
                            <p class='posted-by'>Publié par:{$post['author']} </p>
                            <img src='./src/images/empty_like.png' class='like active' alt='like'/>
                        </div>
                     </div>
                    
                    ";
    }
} else {
    $_SESSION["post_warning"] = "Aucun post pour le moment";
}
