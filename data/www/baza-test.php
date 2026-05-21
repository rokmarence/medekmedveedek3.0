<!doctype html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medek Medvedek - Baza</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'header.php'; ?>

<main class="container py-5">
    <h1 class="mb-4">Preverjanje povezave z bazo</h1>
    <p>SQL za ustvarjanje baze je v <code>../mysql/baza.sql</code>.</p>

    <?php
    try {
        require 'db.php';
        echo '<div class="alert alert-success fw-bold">Povezava na bazo uspešna.</div>';
    } catch (RuntimeException $exception) {
        echo '<div class="alert alert-danger fw-bold">Povezava na bazo ni uspela.</div>';
        echo '<p>' . htmlspecialchars($exception->getMessage(), ENT_QUOTES, 'UTF-8') . '</p>';
    }
    ?>
</main>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
