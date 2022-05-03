<?php

namespace Malazaro\Solid\DependecyInversion\Fixed\Infraestruture;

use Malazaro\Solid\DependecyInversion\Fixed\Domain\Email;

interface Notifiable
{
    public function send(Email $email);
}
