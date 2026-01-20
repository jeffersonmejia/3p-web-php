<?php
$title = 'Projects';
$dsn = "mysql:host=localhost;dbname=mejia_db;charset=utf8mb4";
$pdo = new PDO($dsn, "root", "");
$links = $pdf->query("SELECT * FROM links")->fetchAll(PDO::FETCH_ASSOC);



require __DIR__ . '/../../resources/links.template.php';
