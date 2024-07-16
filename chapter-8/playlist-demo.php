<?php

use App\Entity\Playlist;
use App\MySQL\Connection;

require_once 'vendor/autoload.php';

$connection = Connection::getInstance();
$entityManager = $connection->getEntityManager();

$playlist = $entityManager->getRepository(Playlist::class)->find(1);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://fav.farm/🚀 " />
  <title>Playlist</title>
  <style>
    @import url(https://cdn.jsdelivr.net/npm/@exampledev/new.css@1/new.min.css);
  </style>
</head>
<body>
<h2><?= $playlist->getName() ?></h2>
<br>
<blockquote>
  Category: <?= $playlist->getCategory() ?>
</blockquote>
<br>
<table>
  <thead>
  <tr>
    <th>Songs</th>
    <th>Artist</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($playlist->getSongs() as $song) { ?>
      <tr>
          <td><?= $song->getName() ?></td>
          <td><?= $song->getArtist()->getName() ?></td>
      </tr>
  <?php } ?>
  </tbody>
</table>
</body>
</html>
