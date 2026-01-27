<?php
$title = 'Projects';
$links = $db->query("SELECT * FROM links");
require __DIR__ . '/../../resources/links.template.php';
