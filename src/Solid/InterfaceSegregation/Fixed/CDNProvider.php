<?php

namespace Malazaro\Solid\InterfaceSegregation\Fixed;

interface CDNProvider
{
    public function getCDNAddress($cdnAddress): string;
}
