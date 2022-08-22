<?php
require_once './functions.php';
// include_once './functions.php';
// gfhfghfghfg

// $login = strip_tags( trim($_GET['login'] ?? null) );
$login = clear($_GET['login'] ?? null);
$gender = clear($_GET['gender'] ?? null);
$color = clear($_GET['color'] ?? null);

echo "<p style='color: $color'>$gender $login </p>";

$langs = array_map('clear', $_GET['langs'] ?? []);

echo implode(', ', $langs) . '<br>';