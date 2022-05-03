<?php

namespace Malazaro\Solid\InterfaceSegregation\Fixed;

use Malazaro\Solid\InterfaceSegregation\Fixed\CDNProvider;
use Malazaro\Solid\InterfaceSegregation\Fixed\CloudHostingProvider;
use Malazaro\Solid\InterfaceSegregation\Fixed\CloudStorageProvider;

class Amazon implements CDNProvider, CloudHostingProvider, CloudStorageProvider
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

    public function getCDNAddress($cdnAddress): string
    {
        return "CDN Address is {$cdnAddress}";
    }
}
