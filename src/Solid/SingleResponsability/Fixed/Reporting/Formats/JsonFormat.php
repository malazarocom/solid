<?php

namespace Malazaro\Solid\SingleResponsability\Fixed\Reporting\Formats;

use Malazaro\Solid\SingleResponsability\Fixed\Reporting\Formats\Format;

class JsonFormat extends Format
{
    public function __construct(array $data)
    {
        $this->date = $data['date'];
        $this->title = $data['title'];
    }

    public function formatData(): string
    {
        return json_encode($this->getContents());
    }

    private function getContents()
    {
        return [
            'date'  => $this->date,
            'title' => $this->title,
        ];
    }
}
