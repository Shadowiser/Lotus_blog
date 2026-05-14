<?php
session_start();
if (isset($_SESSION["user_id"])) {
} else {
    header("Location: login_register.php");
    exit();
}
