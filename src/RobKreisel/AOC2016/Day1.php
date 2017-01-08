<?php


namespace RobKreisel\AOC2016;


class Day1
{

//R4, R3, L3, L2, L1, R1, L1, R2, R3, L5, L5, R4, L4, R2, R4, L3, R3, L3, R3, R4, R2, L1, R2, L3, L2, L1, R3, R5, L1, L4, R2, L4, R3, R1, R2, L5, R2, L189, R5, L5, R52, R3, L1, R4, R5, R1, R4, L1, L3, R2, L2, L3, R4, R3, L2, L5, R4, R5, L2, R2, L1, L3, R3, L4, R4, R5, L1, L1, R3, L5, L2, R76, R2, R2, L1, L3, R189, L3, L4, L1, L3, R5, R4, L1, R1, L1, L1, R2, L4, R2, L5, L5, L5, R2, L4, L5, R4, R4, R5, L5, R3, L1, L3, L1, L1, L3, L4, R5, L3, R5, R3, R3, L5, L5, R3, R4, L3, R3, R1, R3, R2, R2, L1, R1, L3, L3, L3, L1, R2, L1, R4, R4, L1, L1, R3, R3, R4, R1, L5, L2, R2, R3, R2, L3, R4, L5, R1, R4, R5, R4, L4, R1, L3, R1, R3, L2, L3, R1, L2, R3, L3, L1, L3, R4, L4, L5, R3, R5, R4, R1, L2, R3, R5, L5, L4, L1, L1

// use x,y coordinate system
// choose starting navigation point [0,0]
// interpret navigation to update position
// determine final position

    public function getStartingPosition()
    {
        $startingPosition = [0, 0, 'N'];

        return $startingPosition;
    }

    public function updatePosition($startingPosition, $nav)
    {
        return [5, 0, 'E'];
    }

    public function calculateGridDistance($position1, $position2)
    {
        // Distance from (P1x,P1y) to (P2x,P2y) = | P1x - p2x | + | P1y -P2y |
        $P1x = $position1[0];
        $P1y = $position1[1];
        $P2x = $position2[0];
        $P2y = $position2[1];

        $distance = abs($P1x - $P2x) + abs($P1y - $P2y);

        return $distance;
    }

}

$object = new Day1();
echo "Starting Position: ";
print_r($object->getStartingPosition());
echo "\n";

echo "Distance from start: " . $object->calculateGridDistance([0,0], [-2,5]) . "\n";