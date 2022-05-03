<?php

namespace Malazaro\Solid\InterfaceSegregation;

use Malazaro\Solid\InterfaceSegregation\CloudProvider;

class Dropbox implements CloudProvider
{
    public function getName()
    {
        return 'Dropbox';
    }

    public function storeFile($fileName)
    {
        return "Storing file {$fileName}";
    }

    public function getFile($filePath)
    {
        return "File {$filePath}";
    }

    public function createServer($region)
    {
        // Not implementd
        return false;
    }

    public function listServers($region)
    {
        // Not implementd
        return false;
    }

    public function getCDNAddress($cdnAddress)
    {
        // Not implementd
        return false;
    }
}
