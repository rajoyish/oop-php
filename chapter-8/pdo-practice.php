<?php

use App\Connection;

require_once 'vendor/autoload.php';

$connection = Connection::getInstance();

$pdo = $connection->getPdo();

$stmt = $pdo->prepare('INSERT INTO playlist(name,category) VALUES(:name,:category)');
$stmt->execute(['name' => 'Beach Party', 'category' => 'Dance']);
$inserted = $stmt->rowCount();
dump($inserted);

$sql = 'UPDATE playlist SET name = :name WHERE id = :id';
$pdo->prepare($sql)->execute([
    'name' => 'Total 80s Power Ballads',
    'id' => 1,
]);

$stmtIII = $pdo->query('SELECT name from playlist');
foreach ($stmtIII as $row) {
    echo $row['name'].PHP_EOL;
}

$stmtIV = $pdo->prepare('SELECT name FROM playlist WHERE id = :id');
$stmtIV->execute(['id' => 1]);
$name = $stmtIV->fetchColumn();
dump($name);

$count = $pdo->query('SELECT COUNT(*) FROM playlist')->fetchColumn();
dump($count);

$playlists = $pdo->query('SELECT * FROM playlist')
    ->fetchAll();

foreach ($playlists as $playlist) {
    dump($playlist['name']);
}
