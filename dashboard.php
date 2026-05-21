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
</head>
<header>
    <div class="logo"></div>
    <nav>
        <ul>

        </ul>
    </nav>
</header>
<main></main>
<footer></footer>

<body>

</body>

</html>