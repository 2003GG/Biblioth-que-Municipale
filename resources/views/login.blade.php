<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Bibliothèque Municipale</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="resources/views/css/styles.css">
</head>
<body class="login-page">
    <div class="login-container">
        <div class="login-left">
            <div class="library-illustration">
                <div class="book-stack">
                    <div class="book book-1"></div>
                    <div class="book book-2"></div>
                    <div class="book book-3"></div>
                    <div class="book book-4"></div>
                </div>
                <div class="floating-particles">
                    <span class="particle"></span>
                    <span class="particle"></span>
                    <span class="particle"></span>
                    <span class="particle"></span>
                    <span class="particle"></span>
                </div>
            </div>
            <div class="welcome-text">
                <h1>Bibliothèque<br>Municipale</h1>
                <p>Système de gestion intelligent pour bibliothécaires modernes</p>
            </div>
        </div>

        <div class="login-right">
            <div class="login-form-wrapper">
                <div class="login-header">
                    <h2>Bienvenue</h2>
                    <p>Connectez-vous pour accéder au système</p>
                </div>

                <form class="login-form">
                    <div class="form-group">
                        <label for="email">Adresse email</label>
                        <input type="email" id="email" name="email" placeholder="bibliothecaire@ville.ma" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" placeholder="••••••••" required>
                    </div>

                    <div class="form-options">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" name="remember">
                            <span class="checkbox-label">Se souvenir de moi</span>
                        </label>
                        <a href="#" class="forgot-password">Mot de passe oublié ?</a>
                    </div>

                    <button type="submit" class="btn-primary">
                        <span>Se connecter</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M4 10H16M16 10L11 5M16 10L11 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </form>

                <div class="login-footer">
                    <p>© 2026 Bibliothèque Municipale de la Ville</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
