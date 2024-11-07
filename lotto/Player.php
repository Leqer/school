<?php
namespace Domain;
class Player
{
    private array $numbers;

    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    public function getNumbers(): array
    {
        return $this->numbers;
    }
}
