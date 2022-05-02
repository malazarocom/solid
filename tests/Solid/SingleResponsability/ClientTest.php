<?php

namespace Malazaro\Tests;

use Malazaro\Solid\SingleResponsability\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testHtmlReport()
    {
        $arrayDataReport = [
            'date'  => '28/04/1977',
            'title' => 'Super Informe html'
        ];
        
        $expected = "<h1>{$arrayDataReport['title']}</h1><h3>{$arrayDataReport['date']}</h3>";
        $client = new Client();
        $result = $client->getReport('html', $arrayDataReport);
        $this->assertEquals($expected, $result);
    }
}
