<?php

namespace Malazaro\Solid\DependecyInversion\Fixed\Application;

use DateTimeInterface;
use Malazaro\Solid\DependecyInversion\Fixed\Domain\Email;
use Malazaro\Solid\DependecyInversion\Fixed\Domain\Employee;
use Malazaro\Solid\DependecyInversion\Fixed\Domain\EmployeeRepository;
use Malazaro\Solid\DependecyInversion\Fixed\Application\MessageFormatter;
use Malazaro\Solid\DependecyInversion\Fixed\Infraestruture\Notifiable;

class BirthdayGreeter
{
    private DateTimeInterface $date;
    private EmployeeRepository $employeeRepository;
    private MessageFormatter $messageFormatter;
    private Notifiable $notifiable;
    private string $subject;

    public function __construct(
        DateTimeInterface $date,
        EmployeeRepository $employeeRepository,
        MessageFormatter $messageFormatter,
        Notifiable $notifiable,
        string $subject
    ) {
        $this->date = $date;
        $this->employeeRepository = $employeeRepository;
        $this->messageFormatter = $messageFormatter;
        $this->notifiable = $notifiable;
        $this->subject = $subject;
    }

    public function __invoke(): void
    {
        $employees =  $this->employeeRepository->findEmployeesBornOn($this->date);

        foreach ($employees as $employee) {
            $message = $this->messageFormatter->format($employee->getFirstName());
            $email = new Email($employee->getEmail(), $this->subject, $message);
            $this->notifiable->send($email);
        }
    }

    private function emailFor(Employee $employee)
    {
        $message = $this->messageFormatter->format($employee->getFirstName());
        $email = new Email($employee->getEmail(), $this->subject, $message);
        $this->notifiable->send($email);
    }
}
