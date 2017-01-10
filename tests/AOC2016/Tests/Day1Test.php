<?php


namespace AOC2016\Tests;


use AOC2016\Day1;
use PHPUnit_Framework_TestCase;

class Day1Test extends PHPUnit_Framework_TestCase
{

    /**
     * @var Day1
     */
    private $object;

    public function setUp()
    {
        $this->object = new Day1();
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
        $this->object->updatePosition('R51');
        $this->assertEquals([2, -47, 'S'], $this->object->getCurrentPosition());
    }

    public function testCalculateGridDistance()
    {
        $this->assertEquals(5, $this->object->calculateGridDistance([0,0],[-2,3]));
    }

}