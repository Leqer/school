<?php

namespace Classes;

class PrizeCalculator
{
    public function calculate(int $matches): string
    {
        switch ($matches) {
            case 6:
                return "1 000 000 zł";
            case 5:
                return "50 000 zł";
            case 4:
                return "5 000 zł";
            case 3:
                return "500 zł";
            default:
                return "0 zł";
        }
    }
}
