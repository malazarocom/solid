<?php

namespace Malazaro\Solid\OpenClosePrinciple\Fixed;

abstract class Car
{
    abstract public function getBrandName(): string;
    abstract public function getCarAveragePrice(): int;
}
