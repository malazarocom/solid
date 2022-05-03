<?php

namespace Malazaro\Tests\Solid\DependencyInversion\Fixed\Application;

use PHPUnit\Framework\TestCase;

use Malazaro\Solid\DependecyInversion\Fixed\Application\BirthdayGreeter;
use Malazaro\Solid\DependecyInversion\Fixed\Application\BirthdayMessageFormatter;
use DateTimeImmutable;
use DateTimeInterface;
use Malazaro\Solid\DependecyInversion\Fixed\Domain\Employee;
use Malazaro\Solid\DependecyInversion\Fixed\Infraestruture\InMemoryEmployeeRepository;
use Malazaro\Solid\DependecyInversion\Fixed\Infraestruture\NotifiableStandardOutput;
use MessageFormatter;

class BirthdayGreeterTest extends TestCase
{
    private const SUBJECT = 'test subject';

    /**
     * @param array $employeesData
     * @dataProvider provideEmployeesDataBornOnToday
     */
    public function testShouldGreetBirthdays(array $employeesData)
    {
        $employees = $this->buildEmployees($employeesData);
        $greeter = new BirthdayGreeter(
            new DateTimeImmutable(),
            new InMemoryEmployeeRepository($employees),
            new BirthdayMessageFormatter(),
            new NotifiableStandardOutput,
            self::SUBJECT
        );
        $employee = array_shift($employees);
        $formattedMessage = sprintf('Happy birthday, dear %s!', $employee->getFirstname());
        $expected = sprintf(
            'Sending to %s with subject %s this message:%s',
            $employee->getEmail(),
            self::SUBJECT,
            $formattedMessage,
        );

        self::expectOutputString($expected);

        $greeter();
    }

    /**
     * @param $employeesData
     * @return Employee[]
     */
    public function buildEmployees(array $employeesData)
    {
        return array_map(function (array $employeeData) {
            return new Employee(
                $employeeData['firstName'],
                $employeeData['lastName'],
                $employeeData['dateOfBirht'],
                $employeeData['email']
            );
        }, $employeesData);
    }

    /**
     * @return iterable
     */
    public function provideEmployeesDataBornOnToday(): iterable
    {
        yield [
            [
                [
                    'firstName'     => 'Jhon',
                    'lastName'      => 'Doe',
                    'dateOfBirht'   => new DateTimeImmutable(),
                    'email'         => 'fake1@test.com',
                ],
            ],
        ];
    }
}
