<?php

namespace Classes;

class StandardPrizeCalculator implements PrizeStrategyInterface
{
    public function calculate(int $numberOfMatches): string
    {

        switch ($numberOfMatches) {
            case 0:
                return 'No prize';
            case 1:
                return '$10';
            case 2:
                return '$50';
            case 3:
                return '$100';
            case 4:
                return '$1000';
            case 5:
                return '$10000';
            case 6:
                return '$1000000';
            default:
                return 'Invalid number of matches';
        }
    }
}