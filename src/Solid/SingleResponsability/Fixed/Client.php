<?php

namespace Malazaro\Solid\SingleResponsability\Fixed;

use Malazaro\Solid\SingleResponsability\Fixed\Reporting\Formats\HtmlFormat;
use Malazaro\Solid\SingleResponsability\Fixed\Reporting\Formats\JsonFormat;

class Client
{
    public function getHtmlReport(HtmlFormat $htmlReport)
    {
        return $htmlReport->formatData();
    }

    public function getJsonReport(JsonFormat $jsonFormat)
    {
        return $jsonFormat->formatData();
    }
}
