<?php

namespace Malazaro\Solid\DependecyInversion\Fixed\Infraestruture;

use Malazaro\Solid\DependecyInversion\Fixed\Infraestruture\Notifiable;
use Malazaro\Solid\DependecyInversion\Fixed\Domain\Email;

class NotifiableStandardOutput implements Notifiable
{
    public function send(Email $email)
    {
        echo sprintf($this->getTemplate(), $email->getTo(), $email->getSubject(), $email->getMessage());
    }

    private function getTemplate()
    {
        return 'Sending to %s with subject %s this message:%s';
    }
}
