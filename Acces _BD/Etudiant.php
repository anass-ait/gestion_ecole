<?php
require_once 'connexion.php';

function getEtudiants($pdo) {
    $sql = "SELECT * FROM etudiant";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
