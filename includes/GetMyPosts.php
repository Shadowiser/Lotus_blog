        <?php
        require("./config/config.php");
        $nom = $_SESSION["nom"];
        $user_id = $_SESSION["user_id"];
        $result = $conn->query("SELECT posts.titre, posts.contenu, users.nom AS author
FROM posts
JOIN users
ON posts.user_id = users.id
WHERE posts.user_id = $user_id");
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
                            <p class='post-numbers'>Ce post a : likes</p>
                        </div>
                     </div>
                    
                    ";
            }
        } else {
            $_SESSION["post_warning"] = "Aucun post pour le moment";
        }

        ?>