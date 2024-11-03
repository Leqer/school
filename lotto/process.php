<?php
session_start();
require 'db_connect.php';
require 'Lotto.php';
$userNumbers = $_SESSION['userNumbers'];
$lotto = new Lotto();
$randomNumbers = $lotto->generateNumbers();
$matches = $lotto->checkMatches($userNumbers, $randomNumbers);
$numberOfMatches = count($matches);
$userNumbersStr = implode(", ", $userNumbers);
$randomNumbersStr = implode(", ", $randomNumbers);
$matchesCount = $numberOfMatches;
$sql = "INSERT INTO results (user_numbers, random_numbers, matches) VALUES (:user_numbers, :random_numbers, :matches)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':user_numbers', $userNumbersStr);
$stmt->bindParam(':random_numbers', $randomNumbersStr);
$stmt->bindParam(':matches', $matchesCount);
if ($stmt->execute()) {
    echo "Dane zostały pomyślnie zapisane!\n";
} else {
    echo "Wystąpił błąd podczas zapisywania danych.";
}
$prize = $lotto->calculatePrize($numberOfMatches);
echo "Wylosowane liczby: " . implode(", ", $randomNumbers) . "\n";
echo "Trafiłeś " . $numberOfMatches . " liczb(y): " . implode(", ", $matches) . "\n";
echo "Twoja wygrana: " . $prize . "\n";
echo "<p><a href='results.php'>Zobacz historię gier</a></p>";
?>