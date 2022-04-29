<?php

namespace Malazaro\Solid\LiskovSubstitution\Fixed;

use Malazaro\Solid\LiskovSubstitution\Fixed\Shape;

class Client
{
    public function areaVerifier(Shape $shape)
    {
        return $shape->getArea();
    }
}
