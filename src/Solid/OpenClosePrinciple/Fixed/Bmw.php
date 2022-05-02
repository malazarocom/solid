<?php

namespace Malazaro\Solid\OpenClosePrinciple\Fixed;

use Malazaro\Solid\OpenClosePrinciple\Fixed\Car;

class Bmw extends Car
{
    public function getBrandName(): string
    {
        return 'BMW';
    }

    public function getCarAveragePrice(): int
    {
        return 39000;
    }
}
