<?php

namespace Malazaro\Solid\DependecyInversion\Fixed\Domain;

use Malazaro\Solid\DependecyInversion\Fixed\Domain\Employee;
use DateTimeInterface;

interface EmployeeRepository
{
    /**
     * Undocumented function
     *
     * @param DateTimeInterface $date
     * @return Employee[]
     */
    public function findEmployeesBornOn(DateTimeInterface $date);
}
