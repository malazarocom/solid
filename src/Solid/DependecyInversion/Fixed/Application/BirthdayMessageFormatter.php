<?php

namespace Malazaro\Solid\DependecyInversion\Fixed\Application;

use Malazaro\Solid\DependecyInversion\Fixed\Application\MessageFormatter;

class BirthdayMessageFormatter implements MessageFormatter
{
    public function format(string $message): string
    {
        return sprintf($this->getTemplate(), $message);
    }

    private function getTemplate()
    {
        return 'Happy birthday, dear %s!';
    }
}
