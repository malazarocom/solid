<?php

namespace Malazaro\Tests\Solid\InterfaceSegregation;

use Malazaro\Solid\InterfaceSegregation\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testGetClientListServers()
    {
        $client = new Client();
        $testString = $client->getClientListServers();
        $substring = 'Warning';

        if (strstr($testString, $substring)) {
            $this->fail('Interface Segregation Principle is KO');
        }

        $this->assertIsString($testString);
    }
}
