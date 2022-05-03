<?php

namespace Malazaro\Solid\DependecyInversion\Fixed\Domain;

class Email
{
    private string $to;
    private string $subject;
    private string $message;

    public function __construct(string $to, string $subject, string $message)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->message = $message;
    }

    public function getTo()
    {
        return $this->to;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
