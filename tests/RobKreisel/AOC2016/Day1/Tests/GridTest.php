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
        $this->object->updatePosition('L3');
        $this->assertEquals([-3, 0, 'W'], $this->object->getCurrentPosition());
        $this->object->updatePosition('R4');
        $this->assertEquals([-3, 4, 'N'], $this->object->getCurrentPosition());
        $this->object->updatePosition('R5');
        $this->assertEquals([2, 4, 'E'], $this->object->getCurrentPosition());
        $this->object->updatePosition('R5');
        $this->assertEquals([2, -1, 'S'], $this->object->getCurrentPosition());
    }

    public function testCalculateGridDistance()
    {
        $this->assertEquals(5, $this->object->calculateGridDistance([0,0],[-2,3]));
    }

}