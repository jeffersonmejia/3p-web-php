<?php
$title = 'Projects';

$dsn = "mysql:host=db;dbname=web_php;charset=utf8mb4";

try {
	$pdo = new PDO($dsn, 'db', 'db', [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	]);

	$links = $pdo->query("SELECT * FROM links")
		->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
	die("Error de conexión: " . $e->getMessage());
}

require __DIR__ . '/../../resources/links.template.php';
