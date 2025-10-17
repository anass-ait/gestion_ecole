<?php
require_once 'connexion.php';

function getProfesseurs($pdo) {
    $sql = "SELECT * FROM professeur";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
