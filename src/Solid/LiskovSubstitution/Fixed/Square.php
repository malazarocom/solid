<?php

namespace Malazaro\Solid\LiskovSubstitution\Fixed;

use Malazaro\Solid\LiskovSubstitution\Fixed\Shape;

class Square extends Shape
{
    public function setHeight($value)
    {
        $this->setEdge($value);
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setWidth($value)
    {
        $this->setEdge($value);
    }

    public function getWidth()
    {
        return $this->width;
    }

    private function setEdge($value)
    {
        $this->height =  $value;
        $this->width = $value;
    }
}
