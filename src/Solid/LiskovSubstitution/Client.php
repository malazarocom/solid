<?php

namespace Malazaro\Solid\LiskovSubstitution;

use Malazaro\Solid\LiskovSubstitution\Rectangle;
use Exception;

class Client
{
    public function areaVerifier(Rectangle $rectangle)
    {
        $rectangle->setWidth(5);
        $rectangle->setHeight(4);

        if ($rectangle->getArea() != 20) {
            throw new Exception('Bad area! Liskov substitution principle KO.');
        }

        return true;
    }
}
