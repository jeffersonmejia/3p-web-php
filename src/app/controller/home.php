<?php
$title = 'Home';

$dsn = "mysql:host=db;dbname=web_php;charset=utf8mb4";

try {
	$pdo = new PDO($dsn, 'db', 'db', [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	]);

	$posts = $pdo->query("SELECT * FROM posts ORDER BY id DESC LIMIT 6")
		->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
	die("Error de conexión: " . $e->getMessage());
}

require __DIR__ . '/../../resources/home.template.php';
