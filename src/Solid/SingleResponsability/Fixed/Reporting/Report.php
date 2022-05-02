<?php

namespace Malazaro\Solid\SingleResponsability\Fixed\Reporting;

class Report
{
    /**
     * @var string
     */
    protected $date;

    /**
     * @var string
     */
    protected $title;

    public function __construct(string $date, string $title)
    {
        $this->date = $date;
        $this->title = $title;
    }

    public function getContents(): array
    {
        return [
            'date'  => $this->date,
            'title' => $this->title
        ];
    }
}
