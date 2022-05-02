<?php

namespace Malazaro\Solid\SingleResponsability\Fixed\Reporting\Formats;

use Malazaro\Solid\SingleResponsability\Fixed\Reporting\Formats\Format;

class HtmlFormat extends Format
{
    public function __construct(array $arrayConstruct)
    {
        $this->date = $arrayConstruct['date'];
        $this->title = $arrayConstruct['title'];
    }

    public function formatData(): string
    {
        return "<h1>{$this->title}</h1><h3>{$this->date}</h3>";
    }
}
