<?php
session_start();
require_once("./config/config.php");

if (!isset($_SESSION["email"])) {
    header("Location: login_register.php");
    exit();
}

$email = $_SESSION["email"];
$nom = strtoupper($_SESSION["nom"]);
$exists = $conn->query("SELECT * FROM users WHERE email = '$email'");

if ($exists->num_rows == 0) {
    session_destroy();
    header("Location: login_register.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord de {$nom} </title>
    <link rel="stylesheet" href="./styles/dashboard.css">
</head>

<header>
    <div class="header">
        <div class="logo">
            <img src="./src/images/logo.png" alt="" id="logo">
        </div>
        <nav class="navbar">
            <ul class="nav-links">
                <li><a href="index.php" class="nav-link">Accueil</a></li>
                <li><a href="posts.php" class="nav-link">Posts</a></li>
                <li><a href="profil.php" class="nav-link">Profil</a></li>
                <li><a href="logout.php"><button class="disconnect-btn">Se déconnecter</button></a></li>
            </ul>
        </nav>
    </div>
</header>
<main>
    <?php
    if (isset($_SESSION["nom"])) {
        $nom = strtoupper($_SESSION["nom"]);
    }
    echo "<h1 class='hi-text'>Bonjour $nom</h1>"

    ?>
    <h2 class="lotus_title">Postez un magnifique et vivant <span class="lotus_word">lotus</span></h2>
    <form class="form_container" action="post.php" method="post">
        <label for="post_title">Titre</label>
        <input type="text" placeholder="Titre du lotus" id="post_title" name="post_title" required>
        <label for="content">Contenu</label>
        <textarea name="post_content" id="content" placeholder="Contenu du lotus" required></textarea>
        <button type="submit" class="post_btn" name="post_form"><img src="./src/images/logo.png" alt=""> Postez</button>
    </form>
</main>
<footer></footer>

<body>

</body>

</html>