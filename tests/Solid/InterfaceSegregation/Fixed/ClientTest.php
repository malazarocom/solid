<?php

namespace Malazaro\Tests\Solid\InterfaceSegregation\Fixed;

use Malazaro\Solid\InterfaceSegregation\Fixed\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testGetClientListServers()
    {
        $client = new Client();
        $testString = $client->getClientListServers();
        $substring = 'Warning';

        if (strstr($testString, $substring) == false) {
            return $this->assertIsString($testString);
        }

        $this->fail('Interface Segregation Principle is KO');
    }
}
