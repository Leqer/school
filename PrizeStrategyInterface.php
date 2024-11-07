<?php

namespace Classes;

interface PrizeStrategyInterface
{
    public function calculate(int $numberOfMatches): string;
}