<!DOCTYPE html>
<html>
<head>
    <title>Symulator Lotto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="process.php" method="post">
    <label>Wybierz 6 liczb (1-49):</label><br>
    <?php for ($i = 1; $i <= 6; $i++): ?>
        <input type="number" name="userNumbers[]" min="1" max="49" required><br>
    <?php endfor; ?>
    <input type="submit" class="button" value="Zagraj">
</form>
<p><a href="results.php">Zobacz historię gier</a></p>
<div id="result"></div>
<script src="script.js"></script>
</body>
</html>
