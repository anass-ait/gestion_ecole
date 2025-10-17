<?php
// connexion.php : connexion à la base de données
$envFile = __DIR__ . '/.env';

if (!file_exists($envFile)) {
    die("Fichier .env introuvable !");
}

$env = parse_ini_file($envFile);

try {
    $pdo = new PDO(
        "mysql:host={$env['SERVER']};dbname={$env['DB_NAME']};charset=utf8",
        $env['USERNAME'],
        $env['PASSWORD']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
