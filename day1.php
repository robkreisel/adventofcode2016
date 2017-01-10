<?php

require __DIR__ . '/src/autoload.php';

use RobKreisel\AOC2016\Day1\Grid;

$grid = new Grid();

$navigation = file_get_contents(__DIR__ . '/instructions/day1.1-input.txt');

$nav_array = explode(', ', $navigation);

echo "Distance from start: " .
    $grid->calculateGridDistance($grid->getStartingPosition(), $grid->getCurrentPosition()) . "\n";
