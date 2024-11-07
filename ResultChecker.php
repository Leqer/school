<?php
namespace Classes;
class ResultChecker
{
    public function check(array $userNumbers, array $drawnNumbers): array
    {
        return array_intersect($userNumbers, $drawnNumbers);
    }
}
