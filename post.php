<?php
session_start();
require_once("./config/config.php");
if (isset($_POST["post_form"])) {
    $post_title = htmlspecialchars($_POST["post_title"]);
    $post_content = htmlspecialchars($_POST["post_content"]);
    $user_id = $_SESSION["user_id"];
    $likes = 0;
    $conn->query("INSERT INTO posts (titre,contenu,likes,user_id) VALUES ('$post_title','$post_content','$likes','$user_id') ");
    header("Location: index.php");
    exit();
} else {
    $_SESSION["post_error"] = "Problème lors du post";
    exit();
}
