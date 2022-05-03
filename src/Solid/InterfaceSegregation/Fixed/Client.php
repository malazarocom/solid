<?php

namespace Malazaro\Solid\InterfaceSegregation\Fixed;

use Malazaro\Solid\InterfaceSegregation\Amazon;

class Client
{
    public function getClientListServers()
    {
        $arrayServers = [
            new Amazon()
        ];

        return $this->printAllServers($arrayServers);
    }

    private function printAllServers(array $servers)
    {
        $region = 'Irala';
        $output = '';

        foreach ($servers as $server) {
            $providerName = $server->getName();
            $regionServers = $server->listServers($region);
            if ($regionServers) {
                $output .= "$providerName: {$regionServers}";
                continue;
            }

            $output .= "Warning! Not implemented function in {$providerName}";
        }

        return $output;
    }
}
