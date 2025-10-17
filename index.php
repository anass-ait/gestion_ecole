<?php
// index.php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion École</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <!-- En-tête -->
    <header>
        <h1>Bienvenue dans l'application de gestion d'école</h1>
    </header>

    <!-- Barre de navigation -->
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="IHM/affichage.php">Affichage</a></li>
            <li><a href="IHM/form.php">Formulaire</a></li>
            <li><a href="login.php">Connexion</a></li>
        </ul>
    </nav>

    <!-- Contenu principal -->
    <main>
        <h2>Authentification</h2>
        <form action="Gestion_Actions/login.php" method="POST">
            <label for="username">Nom d'utilisateur :</label><br>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Mot de passe :</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <button type="submit">Se connecter</button>
        </form>
    </main>

    <!-- Pied de page -->
    <footer>
        <p>© 2025 Application Gestion École - Réalisé par l’équipe de développement</p>
    </footer>
</body>
</html>
