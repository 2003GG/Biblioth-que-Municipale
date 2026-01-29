<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Bibliothèque Municipale</title>
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
                <p>Rejoignez notre communauté de lecteurs passionnés</p>
            </div>
        </div>

        <div class="login-right">
            <div class="login-form-wrapper">
                <div class="login-header">
                    <h2>Créer un compte</h2>
                    <p>Inscrivez-vous pour accéder à notre collection</p>
                </div>

                <form class="login-form">
                    <div class="form-group">
                        <label for="role">Je m'inscris en tant que *</label>
                        <select id="role" name="role" required>
                            <option value="">Sélectionner votre rôle</option>
                            <option value="member">Membre</option>
                            <option value="librarian">Bibliothécaire</option>
                        </select>
                    </div>

                    <div class="form-row-inline">
                        <div class="form-group">
                            <label for="firstName">Prénom *</label>
                            <input type="text" id="firstName" name="firstName" placeholder="Votre prénom" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Nom *</label>
                            <input type="text" id="lastName" name="lastName" placeholder="Votre nom" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Adresse email *</label>
                        <input type="email" id="email" name="email" placeholder="exemple@email.ma" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Téléphone *</label>
                        <input type="tel" id="phone" name="phone" placeholder="+212 6XX XXX XXX" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe *</label>
                        <input type="password" id="password" name="password" placeholder="••••••••" required>
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword">Confirmer le mot de passe *</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="••••••••" required>
                    </div>

                    <div class="form-options">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" name="terms" required>
                            <span class="checkbox-label">J'accepte les <a href="#" class="terms-link">conditions d'utilisation</a></span>
                        </label>
                    </div>

                    <button type="submit" class="btn-primary">
                         </form>

                        <span>Créer mon compte</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M4 10H16M16 10L11 5M16 10L11 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <div class="form-divider">
                        <span>Déjà inscrit ?</span>
                    </div>

                    <a href="login.html" class="btn-outline">
                        <span>Se connecter</span>
                    </a>


                <div class="login-footer">
                    <p>© 2026 Bibliothèque Municipale de la Ville</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
