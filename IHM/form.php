<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
    <h1>Formulaire d’ajout</h1>
    <form method="POST" action="../Gestion_Actions/login.php">
        <label>Nom :</label><br>
        <input type="text" name="nom" required><br><br>

        <label>Prénom :</label><br>
        <input type="text" name="prenom" required><br><br>

        <label>Email :</label><br>
        <input type="email" name="email" required><br><br>

        <button type="submit">Soumettre</button>
    </form>
</body>
</html>