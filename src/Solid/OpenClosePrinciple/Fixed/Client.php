<?php

namespace Malazaro\Solid\OpenClosePrinciple\Fixed;

use Malazaro\Solid\OpenClosePrinciple\Fixed\Audi;
use Malazaro\Solid\OpenClosePrinciple\Fixed\Bmw;
use Malazaro\Solid\OpenClosePrinciple\Fixed\Ferrari;

class Client
{
    public function printBrands()
    {
        $arrayCars = [
            new Audi(),
            new Bmw(),
            new Ferrari()
        ];

        return $this->printCarAveragePrice($arrayCars);
    }

    private function printCarAveragePrice(array $arrayCars)
    {
        $output = '';

        foreach ($arrayCars as $car) {
            $output .= "{$car->getBrandName()} {$car->getCarAveragePrice()}";
        }

        return $output;
    }
}
