<?php

namespace Malazaro\Solid\InterfaceSegregation;

interface CloudProvider
{
    public function getName();
    public function storeFile($fileName);
    public function getFile($filePath);
    public function createServer($region);
    public function listServers($region);
    public function getCDNAddress($cdnAddress);
}
