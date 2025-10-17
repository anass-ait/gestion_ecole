<?php
require_once '../Acces_BD/connexion.php';
require_once '../Acces_BD/Etudiant.php';
require_once '../Acces_BD/Professeur.php';

$etudiants = getEtudiants($pdo);
$professeurs = getProfesseurs($pdo);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
    <h1>Liste des étudiants</h1>
    <table border="1">
        <tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Email</th></tr>
        <?php foreach ($etudiants as $e): ?>
            <tr>
                <td><?= $e['id'] ?></td>
                <td><?= $e['nom'] ?></td>
                <td><?= $e['prenom'] ?></td>
                <td><?= $e['email'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h1>Liste des professeurs</h1>
    <table border="1">
        <tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Email</th></tr>
        <?php foreach ($professeurs as $p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['nom'] ?></td>
                <td><?= $p['prenom'] ?></td>
                <td><?= $p['email'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>