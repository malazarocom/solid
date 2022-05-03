<?php

namespace Malazaro\Solid\InterfaceSegregation\Fixed;

interface CloudHostingProvider
{
    public function createServer($region);
    public function listServers($region);
}
