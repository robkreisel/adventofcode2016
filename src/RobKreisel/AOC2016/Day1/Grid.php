<?php


namespace RobKreisel\AOC2016\Day1;


class Grid
{

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
        $P1x = $position1[0];
        $P1y = $position1[1];
        $P2x = $position2[0];
        $P2y = $position2[1];

        $distance = abs($P1x - $P2x) + abs($P1y - $P2y);

        return $distance;
    }

}
