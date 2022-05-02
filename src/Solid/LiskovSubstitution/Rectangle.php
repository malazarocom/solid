<?php

namespace Malazaro\Solid\LiskovSubstitution;

class Rectangle
{
    protected $height;
    protected $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }
}
