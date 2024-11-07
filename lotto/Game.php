<?php

namespace Domain;

use Classes\ResultChecker;
use Classes\PrizeStrategyInterface;
use Classes\StandardPrizeCalculator;
use Classes\DoublePrizeCalculator;

class Game
{
    private Player $player;
    private Drawing $drawing;
    private array $matches;
    private string $prize;

    public function __construct(Player $player, Drawing $drawing)
    {
        $this->player = $player;
        $this->drawing = $drawing;
        $this->calculateResult();
    }

    private function calculateResult(): void
    {
        $checker = new ResultChecker();

        $prizeStrategy = new StandardPrizeCalculator();

        $this->matches = $checker->check($this->player->getNumbers(), $this->drawing->getNumbers());
        $this->prize = $prizeStrategy->calculate(count($this->matches));
    }

    public function getMatches(): array
    {
        return $this->matches;
    }

    public function getPrize(): string
    {
        return $this->prize;
    }

    public function getPlayerNumbers(): array
    {
        return $this->player->getNumbers();
    }

    public function getDrawingNumbers(): array
    {
        return $this->drawing->getNumbers();
    }
}