<?php
session_start();
require_once("./config/config.php");

if (!isset($_SESSION["email"])) {
    header("Location: login_register.php");
    exit();
}

$email = $_SESSION["email"];
$nom = $_SESSION["nom"];
$exists = $conn->query("SELECT * FROM users WHERE email = '$email'");

if ($exists->num_rows == 0) {
    session_destroy();
    header("Location: login_register.php");
    exit();
} ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord de </title>
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
                <li><button class="disconnect-btn">Se déconnecter</button></li>
            </ul>
        </nav>
    </div>
</header>
<main>
    <?php
    if (isset($_SESSION["nom"])) {
        $nom = $_SESSION["nom"];
    }
    echo "<h1 class='hi-text'>Bonjour $nom</h1>"

    ?>
    <form class="form-container" method="post" name="post_form">

    </form>
</main>
<footer></footer>

<body>

</body>

</html>