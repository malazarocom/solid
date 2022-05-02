<?php

namespace Malazaro\Solid\LiskovSubstitution\Fixed;

use Malazaro\Solid\LiskovSubstitution\Fixed\Shape;

class Rectangle extends Shape
{
    public function setHeight($value)
    {
        $this->height = $value;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setWidth($value)
    {
        $this->width = $value;
    }

    public function getWidth()
    {
        return $this->width;
    }
}
