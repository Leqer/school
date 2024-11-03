<?php
require 'Lotto.php';
$userInput = readline("Wprowadź swoje liczby (oddzielone spacją): ");
$userNumbers = array_map('intval', explode(' ', $userInput));
if (count($userNumbers) !== count(array_unique($userNumbers))) {
    echo "Liczby muszą być unikalne! Spróbuj ponownie.\n";
    exit();
}
session_start();
$_SESSION['userNumbers'] = $userNumbers;
header("Location: process.php");
exit();
?>