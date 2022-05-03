<?php

namespace Malazaro\Solid\InterfaceSegregation;

use Malazaro\Solid\InterfaceSegregation\CloudProvider;

class Amazon implements CloudProvider
{
    public function getName()
    {
        return 'Amazon';
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
        return "Creating server in {$region} region";
    }

    public function listServers($region)
    {
        return "Listing {$this->getName()} {$region} servers";
    }

    public function getCDNAddress($cdnAddress)
    {
        return "CDN Address is {$cdnAddress}";
    }
}
