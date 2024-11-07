<?php

namespace Classes;

class DoublePrizeCalculator implements PrizeStrategyInterface
{
    public function calculate(int $numberOfMatches): string
    {
        // Logika obliczania wygranej w podwójnej strategii
        switch ($numberOfMatches) {
            case 0:
                return 'No prize';
            case 1:
                return '$20'; // Podwójna wygrana
            case 2:
                return '$100'; // Podwójna wygrana
            case 3:
                return '$200'; // Podwójna wygrana
            case 4:
                return '$2000'; // Podwójna wygrana
            case 5:
                return '$20000'; // Podwójna wygrana
            case 6:
                return '$2000000'; // Podwójna wygrana
            default:
                return 'Invalid number of matches';
        }
    }
}