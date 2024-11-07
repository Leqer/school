<?php

namespace Domain;

use Classes\NumberGenerator;

class Drawing
{
    private array $numbers;

    public function __construct()
    {
        $generator = new NumberGenerator();
        $this->numbers = $generator->generate();
    }

    public function getNumbers(): array
    {
        return $this->numbers;
    }
}
