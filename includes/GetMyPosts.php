<?php
require("./config/config.php");
$nom = $_SESSION["nom"];
$user_id = $_SESSION["user_id"];
$result = $conn->query("SELECT posts.titre, posts.contenu,posts.titre, users.nom AS author
FROM posts
JOIN users
ON posts.user_id = users.id
WHERE posts.user_id = $user_id");
if ($result->num_rows > 0) {
    while ($post = $result->fetch_assoc()) {
        $nom = strtoupper($post['author']);
        echo "
                     <div class='post-card'>
                        <div class='post-header'>
                            <img class='lotus-icon' src='./src/images/lotus_icon.png' alt='lotus_icon'/>
                            <h2 class='post-title'>{$post['titre']}</h2>
                        </div>
                     
                        <p class='post-content'>{$post['contenu']}</p>
                        <div class='post-footer'>
                            <p class='posted-by'>Publié par : {$nom} </p>
                            <div class='action-div'>
                                <a href ='./includes/UpdateLotus.php'><button class='update-post'>Modifier le post <img src='./src/images/edit.png'></button></a>
                                <a href ='./includes/DeleteLotus.php'><button class='delete-post'>Supprimer le post <img src='./src/images/delete.png'></button></a>
                            </div>
                            <p class='post-numbers'>Ce post a : likes</p>
                        </div>
                     </div>
                    ";
    }
} else {
    $_SESSION["post_warning"] = "Aucun post pour le moment";
}

?>