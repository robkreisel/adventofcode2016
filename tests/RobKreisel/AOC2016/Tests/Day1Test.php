<?php


namespace RobKreisel\AOC2016\Tests;


use PHPUnit_Framework_TestCase;
use RobKreisel\AOC2016\Day1;

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

    public function testUpdatePosition()
    {
        $this->assertEquals([5, 0, 'E'], $this->object->updatePosition([2, 0, 'S'], 'L3'));
    }
    public function testCalculateGridDistance()
    {
        $this->assertEquals(5, $this->object->calculateGridDistance([0,0],[-2,3]));
    }
}