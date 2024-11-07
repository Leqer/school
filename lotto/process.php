<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'db_connect.php';

use Domain\Player;
use Domain\Drawing;
use Domain\Game;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userNumbers = $_POST['userNumbers'];

    if (count($userNumbers) === 6 && allNumbersValid($userNumbers)) {
        $player = new Player($userNumbers);
        $drawing = new Drawing();
        $game = new Game($player, $drawing);
        $playerNumbers = $game->getPlayerNumbers();
        $drawingNumbers = $game->getDrawingNumbers();
        $matches = $game->getMatches();
        $prize = $game->getPrize();


        $response = [
            'userNumbers' => $playerNumbers,
            'randomNumbers' => $drawingNumbers,
            'matches' => $matches,
            'numberOfMatches' => count($matches),
            'prize' => $prize
        ];

        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        echo json_encode(['error' => 'Please select exactly 6 valid numbers.']);
    }
} else {
    echo json_encode(['error' => 'Invalid request method.']);
}

function allNumbersValid($numbers) {
    foreach ($numbers as $number) {
        if ($number < 1 || $number > 49) {
            return false;
        }
    }
    return true;
}