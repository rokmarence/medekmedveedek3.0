<?php
$dbHost = getenv('DB_HOST') ?: 'podatkovna-baza';
$dbPort = getenv('DB_PORT') ?: '3306';
$dbName = getenv('DB_NAME') ?: 'medek_medvedek';
$dbUser = getenv('DB_USER') ?: 'root';
$dbPassword = getenv('DB_PASSWORD') ?: 'superVarnoGeslo';
$dbCharset = getenv('DB_CHARSET') ?: 'utf8mb4';

$dsn = "mysql:host={$dbHost};port={$dbPort};dbname={$dbName};charset={$dbCharset}";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $dbUser, $dbPassword, $options);
} catch (PDOException $exception) {
    throw new RuntimeException('Povezava na bazo ni uspela: ' . $exception->getMessage());
}
