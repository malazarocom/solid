<?php

namespace Malazaro\Solid\DependecyInversion\Fixed\Application;

interface MessageFormatter
{
    public function format(string $message): string;
}
