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
                <form method="post" action="login_handler.php">
                    <div class="field">
                        <label for="login-email">Adresse email</label>
                        <input type="email" id="login-email" name="email" placeholder="votre@email.com" required>
                    </div>
                    <div class="field">
                        <label for="login-password">Mot de passe</label>
                        <input type="password" id="login-password" name="password" placeholder="••••••••" required>
                    </div>
                    <button type="submit" class="submit-btn">Se connecter</button>
                </form>
            </div>

            <!-- Inscription -->
            <div id="register" class="form-box">
                <form method="post" action="register_handler.php">
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
                    <button type="submit" class="submit-btn">Créer mon compte</button>
                </form>
            </div>

        </div>
    </main>

    <script src="./scripts/main.js">
    </script>
</body>

</html>