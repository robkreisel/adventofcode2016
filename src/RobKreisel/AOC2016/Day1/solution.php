<?php

use RobKreisel\AOC2016\Day1\Grid;

$grid = new Grid();

echo "Starting Position: ";
print_r($grid->initializePosition());
echo "\n";

echo "Distance from start: " . $grid->calculateGridDistance([0,0], [-2,5]) . "\n";
