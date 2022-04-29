<?php

namespace Malazaro\Solid\LiskovSubstitution;

use Malazaro\Solid\LiskovSubstitution\Rectangle;

final class Square extends Rectangle
{
    public function __construct($heightAndWidth)
    {
        parent::__construct($heightAndWidth, $heightAndWidth);
    }
    
    public function setHeight($value)
    {
        $this->height = $value;
        $this->width = $value;
    }
    
    public function setWidth($value)
    {
        $this->height = $value;
        $this->width = $value;
    }
}
