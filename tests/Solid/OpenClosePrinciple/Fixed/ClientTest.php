<?php

namespace Malazaro\Tests\Solid\OpenClosePrinciple\Fixed;

use Malazaro\Solid\OpenClosePrinciple\Fixed\Audi;
use Malazaro\Solid\OpenClosePrinciple\Fixed\Bmw;
use Malazaro\Solid\OpenClosePrinciple\Fixed\Client;
use Malazaro\Solid\OpenClosePrinciple\Fixed\Ferrari;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testPrintBrands()
    {
        $client = new Client();
        $testString = $client->printBrands();
        $substring = 'BMW';
        $this->assertStringContainsString($substring, $testString, "BMW not found in string: {$testString}");
    }
}
