<?php

namespace Malazaro\Solid\OpenClosePrinciple;

class Car
{
    protected $brand;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }
}
