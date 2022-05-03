<?php

namespace Malazaro\Solid\DependecyInversion\Fixed\Domain;

use DateTimeInterface;

class Employee
{
    private string $email;
    private string $firstName;
    private string $lastName;
    private DateTimeInterface $dateOfBirht;

    public function __construct($firstName, $lastName, $dateOfBirht, $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirht = $dateOfBirht;
        $this->email = $email;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getDateOfBirth()
    {
        return $this->dateOfBirht;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
