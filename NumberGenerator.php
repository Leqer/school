<?php

namespace Classes;

class NumberGenerator
{
    private int $min;
    private int $max;
    private int $quantity;

    public function __construct(int $min = 1, int $max = 49, int $quantity = 6)
    {
        $this->min = $min;
        $this->max = $max;
        $this->quantity = $quantity;
    }

    public function generate(): array
    {
        $numbers = [];
        while (count($numbers) < $this->quantity) {
            $number = rand($this->min, $this->max);
            if (!in_array($number, $numbers)) {
                $numbers[] = $number;
            }
        }
        sort($numbers);
        return $numbers;
    }
}
