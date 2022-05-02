<?php

namespace Malazaro\Solid\LiskovSubstitution\Fixed;

abstract class Shape
{
    protected $height;
    protected $width;

    abstract public function setHeight($value);
    abstract public function getHeight();
    abstract public function setWidth($value);
    abstract public function getWidth();

    public function getArea()
    {
        return $this->height * $this->width;
    }
}
