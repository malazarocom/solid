<?php

namespace Malazaro\Tests;

use Malazaro\Solid\SingleResponsability\Fixed\Reporting\Formats\HtmlFormat;
use PHPUnit\Framework\TestCase;

class SingleResponsabilityBadTest extends TestCase
{
    public function testHtmlReport()
    {
        $arrayDataReport = [
            'date'  => '28/04/1977',
            'title' => 'Super Informe html'
        ];

        $expected = "<h1>{$arrayDataReport['title']}</h1><h3>{$arrayDataReport['date']}</h3>";
        $htmlFormat = new HtmlFormat($arrayDataReport);
        $result = $htmlFormat->formatData();
        $this->assertEquals($expected, $result);
    }
}
