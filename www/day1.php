<?php

include_once('../src/autoload.php');

use RobKreisel\AOC2016\Day1\Grid;

$grid = new Grid();

echo "Starting Position: ";
print_r($grid->getStartingPosition());
echo "\n";

echo "Distance from start: " .
    $grid->calculateGridDistance($grid->getStartingPosition(), $grid->getCurrentPosition()) . "\n";
