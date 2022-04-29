<?php

namespace Malazaro\Tests;

use Malazaro\Solid\LiskovSubstitution\Fixed\Client;
use Malazaro\Solid\LiskovSubstitution\Fixed\Rectangle;
use Malazaro\Solid\LiskovSubstitution\Fixed\Square;
use PHPUnit\Framework\TestCase;

class LiskovSubstitutionGoodTest extends TestCase
{
    public function testRectangleArea()
    {
        $rectangle = new Rectangle();
        $rectangle->setHeight(6);
        $rectangle->setWidth(7);
        $expected = 42;
        $client = new Client();
        $result = $client->areaVerifier($rectangle);
        $this->assertEquals($expected, $result);
    }
    
    public function testSquareArea()
    {
        $square = new Square();
        $square->setHeight(5);
        $client = new Client();
        $expected = 25;
        $result = $client->areaVerifier($square);
        $this->assertEquals($expected, $result);
    }
}
