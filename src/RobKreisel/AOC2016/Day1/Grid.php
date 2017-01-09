<?php


namespace RobKreisel\AOC2016\Day1;


class Grid
{

//R4, R3, L3, L2, L1, R1, L1, R2, R3, L5, L5, R4, L4, R2, R4, L3, R3, L3, R3, R4, R2, L1, R2, L3, L2, L1, R3, R5, L1, L4, R2, L4, R3, R1, R2, L5, R2, L189, R5, L5, R52, R3, L1, R4, R5, R1, R4, L1, L3, R2, L2, L3, R4, R3, L2, L5, R4, R5, L2, R2, L1, L3, R3, L4, R4, R5, L1, L1, R3, L5, L2, R76, R2, R2, L1, L3, R189, L3, L4, L1, L3, R5, R4, L1, R1, L1, L1, R2, L4, R2, L5, L5, L5, R2, L4, L5, R4, R4, R5, L5, R3, L1, L3, L1, L1, L3, L4, R5, L3, R5, R3, R3, L5, L5, R3, R4, L3, R3, R1, R3, R2, R2, L1, R1, L3, L3, L3, L1, R2, L1, R4, R4, L1, L1, R3, R3, R4, R1, L5, L2, R2, R3, R2, L3, R4, L5, R1, R4, R5, R4, L4, R1, L3, R1, R3, L2, L3, R1, L2, R3, L3, L1, L3, R4, L4, L5, R3, R5, R4, R1, L2, R3, R5, L5, L4, L1, L1

// use x,y coordinate system
// choose starting navigation point [0,0]
// interpret navigation to update position
// determine final position

    private $startingPosition;
    private $currentPosition;

    /**
     * Get startingPosition
     *
     * @return mixed
     */
    public function getStartingPosition()
    {
        return $this->startingPosition;
    }

    /**
     * Get currentPosition
     *
     * @return mixed
     */
    public function getCurrentPosition()
    {
        return $this->currentPosition;
    }

    public function __construct()
    {
        $this->initializePositions();
    }

    public function initializePositions()
    {
        $initialPosition = [0, 0, 'N'];
        $this->startingPosition = $initialPosition;
        $this->currentPosition = $initialPosition;
    }

    public function updatePosition($nav)
    {
        $leftRight = substr($nav, 0, 1);
        $distance = substr($nav, 1);
        $facing = $this->currentPosition[2];

        if ($facing == 'N') {
            if ($leftRight == 'L') {
                $this->currentPosition[2] = 'W';
                $this->currentPosition[0] = $this->currentPosition[0] - $distance;
            } else {
                $this->currentPosition[2] = 'E';
                $this->currentPosition[0] = $this->currentPosition[0] + $distance;
            }
        }
        if ($facing == 'S') {
            if ($leftRight == 'L') {
                $this->currentPosition[2] = 'E';
                $this->currentPosition[0] = $this->currentPosition[0] + $distance;
            } else {
                $this->currentPosition[2] = 'W';
                $this->currentPosition[0] = $this->currentPosition[0] - $distance;
            }
        }
        if ($facing == 'E') {
            if ($leftRight == 'L') {
                $this->currentPosition[2] = 'N';
                $this->currentPosition[1] = $this->currentPosition[1] + $distance;
            } else {
                $this->currentPosition[2] = 'S';
                $this->currentPosition[1] = $this->currentPosition[1] - $distance;
            }
        }
        if ($facing == 'W') {
            if ($leftRight == 'L') {
                $this->currentPosition[2] = 'S';
                $this->currentPosition[1] = $this->currentPosition[1] - $distance;
            } else {
                $this->currentPosition[2] = 'N';
                $this->currentPosition[1] = $this->currentPosition[1] + $distance;
            }
        }
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
