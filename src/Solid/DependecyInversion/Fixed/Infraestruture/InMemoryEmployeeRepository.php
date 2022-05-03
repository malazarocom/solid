<?php

namespace Malazaro\Solid\DependecyInversion\Fixed\Infraestruture;

use Malazaro\Solid\DependecyInversion\Fixed\Domain\EmployeeRepository;
use DateTimeInterface;

class InMemoryEmployeeRepository implements EmployeeRepository
{
    private array $employees;

    public function __construct(array $employees)
    {
        $this->employees = $employees;
    }

    public function findEmployeesBornOn(DateTimeInterface $date)
    {
        $notifiableEmployees = [];

        foreach ($this->employees as $employee) {
            if (0 === $employee->getDateOfBirth()->diff($date)->d) {
                $notifiableEmployees[] = $employee;
            }
        }

        return $notifiableEmployees;
    }
}
