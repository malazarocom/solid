<?php

namespace Malazaro\Solid\OpenClosePrinciple\Fixed;

use Malazaro\Solid\OpenClosePrinciple\Fixed\Car;

class Audi extends Car
{
    public function getBrandName(): string
    {
        return 'Audi';
    }

    public function getCarAveragePrice(): int
    {
        return 34000;
    }
}
