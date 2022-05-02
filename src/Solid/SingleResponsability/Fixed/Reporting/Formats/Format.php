<?php

namespace Malazaro\Solid\SingleResponsability\Fixed\Reporting\Formats;

use Malazaro\Solid\SingleResponsability\Fixed\Reporting\Interfaces\InterfaceFormat;

abstract class Format implements InterfaceFormat
{
    public $date;
    public $title;
}
