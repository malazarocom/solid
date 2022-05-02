<?php

namespace Malazaro\Solid\OpenClosePrinciple\Fixed;

use Malazaro\Solid\OpenClosePrinciple\Fixed\Car;

class Ferrari extends Car
{
    public function getBrandName(): string
    {
        return 'Ferrari';
    }

    public function getCarAveragePrice(): int
    {
        return 125000;
    }
}
