<?php

require_once __DIR__. '/Genre.php';
require_once __DIR__. '/Movie.php';

$romantico = new Genere('Romantico');

$casablanca = new Movie ('Casablanca', '2:30h', $romantico);
$matrix = new Movie ('Matrix', '2:00h', $si_fi);