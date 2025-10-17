<?php
session_start();
require_once '../Acces_BD/connexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Exemple simplifié (sans base de données)
    if ($username === 'admin' && $password === 'admin') {
        $_SESSION['user'] = $username;
        header('Location: ../IHM/accueil.php');
        exit();
    } else {
        echo "<p style='color:red;'>Nom d'utilisateur ou mot de passe incorrect.</p>";
    }
}
?>
