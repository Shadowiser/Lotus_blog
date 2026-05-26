<?php

session_start();
require_once("./config/config.php");
if (isset($_POST["register"])) {
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $checmail = $conn->query("SELECT email FROM users WHERE email = '$email'");
    if ($checmail->num_rows > 0) {
        $_SESSION["register_error"] = "Mail déjà enregistré";
    } else {
        $conn->query("INSERT INTO users (nom,email,password) VALUES ('$nom','$email','$password')");
        $_SESSION["register_success"] = "Enregistrement avec succès";
        header("Location: login_register.php");
        exit();
    }
}

if (isset($_POST["login"])) {
    $email = htmlspecialchars($_POST["email"]);
    $password = $_POST["password"];
    $result = $conn->query("SELECT * FROM users WHERE email = '$email'");
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user["password"])) {
            $_SESSION["nom"] = $user["nom"];
            $_SESSION["email"] = $email;
            $_SESSION["user_id"] = $user["id"];
            header("Location: dashboard.php");
            exit();
        } else {
            $_SESSION["login_error"] = "Mail ou mot de passe incorrect";
            header("Location: login_register.php");
            exit();
        }
    } else {

        $_SESSION["login_error"] = "Utilisateur inexistant";
        header("Location: login_register.php");
        exit();
    }
}

$errors = [
    "login" => $_SESSION["login_error"] ?? "",
    "register" => $_SESSION["register_error"] ?? ""
];
function showError($error)
{
    return !empty($error) ? "<p class='error-message'>$error</p>" : "";
}
unset($_SESSION["login_error"]);
unset($_SESSION["register_error"]);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Register · Lotus</title>
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/login_register.css">
</head>

<body>
    <main class="auth-main">

        <div class="auth-brand">
            <span class="auth-logo-text">Lotus</span>
            <p class="auth-tagline">Le réseau social convivial</p>
        </div>

        <div class="auth-wrapper">

            <!-- Onglets -->
            <div class="auth-tabs">
                <button class="tab-btn active" data-target="login">Connexion</button>
                <button class="tab-btn" data-target="register">Inscription</button>
            </div>

            <!-- Connexion -->
            <div id="login" class="form-box active">
                <?php
                echo showError($errors['login'])
                ?>
                <form method="post">
                    <div class="field">
                        <label for="login-email">Adresse email</label>
                        <input type="email" id="login-email" name="email" placeholder="votre@email.com" required>
                    </div>
                    <div class="field">
                        <label for="login-password">Mot de passe</label>
                        <input type="password" id="login-password" name="password" placeholder="••••••••" required>
                    </div>
                    <button type="submit" class="submit-btn" name="login">Se connecter</button>
                </form>
            </div>

            <!-- Inscription -->
            <div id="register" class="form-box">
                <?php
                echo showError($errors['register'])
                ?>
                <form method="post">
                    <div class="field">
                        <label for="reg-nom">Nom complet</label>
                        <input type="text" id="reg-nom" name="nom" placeholder="Jean Dupont" required>
                    </div>
                    <div class="field">
                        <label for="reg-email">Adresse email</label>
                        <input type="email" id="reg-email" name="email" placeholder="votre@email.com" required>
                    </div>
                    <div class="field">
                        <label for="reg-password">Mot de passe</label>
                        <input type="password" id="reg-password" name="password" placeholder="••••••••" required>
                    </div>
                    <button type="submit" class="submit-btn" name="register">Créer mon compte</button>
                </form>
            </div>

        </div>
    </main>

    <script src="./scripts/main.js">
    </script>
</body>

</html>