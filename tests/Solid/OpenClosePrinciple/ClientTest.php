<?php

namespace Malazaro\Tests\OpenClosePrinciple;

use Malazaro\Solid\OpenClosePrinciple\Car;
use Malazaro\Solid\OpenClosePrinciple\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testPrintBrands()
    {
        $arrayCars = [
            new Car('Audi'),
            new Car('BMW'),
            new Car('Ferrari')
        ];

        $client = new Client();
        $testString = $client->printBrands($arrayCars);
        $substring = 'BMW';
        $this->assertStringContainsString($substring, $testString, 'String BMW not found');
    }
}
