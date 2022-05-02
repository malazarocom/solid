<?php

namespace Malazaro\Solid\OpenClosePrinciple;

use Malazaro\Solid\OpenClosePrinciple\Car;

class Client
{
    public function printBrands(array $brands)
    {
        $arrayCars = [
            new Car('Audi'),
            new Car('BMW'),
            new Car('Ferrari')
        ];

        return $this->printCarAveragePrice($arrayCars);
    }

    private function printCarAveragePrice(array $arrayCars)
    {
        $output = '';

        foreach ($arrayCars as $car) {
            $brandName = $car->getBrand();
            switch ($brandName) {
                case 'Audi':
                    $output .= "{$brandName} 34000";
                    break;
                case 'BMW':
                    $output .= "{$brandName} 39000";
                    break;
                case 'Ferrari':
                    $output .= "{$brandName} 125000";
                    break;
            }
        }

        return $output;
    }
}
