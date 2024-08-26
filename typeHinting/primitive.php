<?php

require_once 'song.php';
$song = new Song(['a','song'], 'Windows 10');

print_r($song->numberOfPlays);
print_r($song->name);