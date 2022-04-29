<?php

namespace Malazaro\Tests;

use Malazaro\Solid\LiskovSubstitution\Client;
use Malazaro\Solid\LiskovSubstitution\Rectangle;
use Malazaro\Solid\LiskovSubstitution\Square;
use PHPUnit\Framework\TestCase;

class LiskovSubstitutionBadTest extends TestCase
{
    /**
     * test not respect the liskov substitution principle breaking the rectangle laws while modifying its length
     */
    public function testSquareAreaBad()
    {
        $square = new Square(5);
        $client = new Client();
        $expected = 25;
        $result = $client->areaVerifier($square);
        $this->assertEquals($expected, $result);
    }
}
