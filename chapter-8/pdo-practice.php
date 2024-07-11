<?php

use App\Connection;

require_once 'vendor/autoload.php';

$connection = Connection::getInstance();

$pdo = $connection->getPdo();

//$stmt = $pdo->query('SELECT * FROM playlist');
//while ($row = $stmt->fetch()) {
//    echo $row['name'].PHP_EOL;
//}

$stmt = $pdo->prepare('SELECT * FROM playlist WHERE name LIKE ?');
$stmt->execute(['%Summer%']);
//$playlist = $stmt->fetch(PDO::FETCH_BOTH);
$playlist = $stmt->fetch(PDO::FETCH_OBJ);
dump($playlist);

$stmtTwo = $pdo->prepare('SELECT * FROM playlist WHERE name LIKE :p_name AND category = :category');
$stmtTwo->execute(['p_name' => '%Workout%', 'category' => 'Electronic']);
$playlistTwo = $stmtTwo->fetch();
dump($playlistTwo);
