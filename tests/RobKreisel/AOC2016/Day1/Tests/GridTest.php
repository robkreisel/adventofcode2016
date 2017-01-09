<?php


namespace RobKreisel\AOC2016\Day1\Tests;


use PHPUnit_Framework_TestCase;
use RobKreisel\AOC2016\Day1\Grid;

class GridTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Grid
     */
    private $object;

    public function setUp()
    {
        $this->object = new Grid();
    }

    public function testInitializePosition()
    {
        $this->assertEquals([0,0,'N'], $this->object->getStartingPosition());
    }

    public function testUpdatePosition()
    {
        $this->assertEquals([5, 0, 'E'], $this->object->updatePosition([2, 0, 'S'], 'L3'));
    }

    public function testCalculateGridDistance()
    {
        $this->assertEquals(5, $this->object->calculateGridDistance([0,0],[-2,3]));
    }

}