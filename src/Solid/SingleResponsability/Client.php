<?php

namespace Malazaro\Solid\SingleResponsability;

class Client
{
    public function getReport(string $type, array $data)
    {
        if ($type == 'html') {
            return "<h1>{$data['title']}</h1><h3>{$data['date']}</h3>";
        }

        if ($type == 'json') {
            return json_encode($data);
        }
    }

    public function sendNotificationReport($to, $report)
    {
        // yet another responsibility
        return mail($to, 'report notification', $report);
    }

    public function persistReport($report)
    {
        // yet another responsibility
        // persist($report);
    }
}
