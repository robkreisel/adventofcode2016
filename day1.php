<?php

require __DIR__ . '/src/autoload.php';

use AOC2016\Day1;

$puzzle = new Day1();

$navigation = file_get_contents(__DIR__ . '/instructions/day1.1-input.txt');

$nav_array = explode(', ', $navigation);

foreach ($nav_array as $n) {
    $puzzle->updatePosition($n);
}

echo "Distance from start: " .
    $puzzle->calculateGridDistance($puzzle->getStartingPosition(), $puzzle->getCurrentPosition()) . "\n";
