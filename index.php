
<?php
$godzina = (int)date('H');

if ($godzina >= 6 && $godzina < 18) {
    $powitanie = "Dzień dobry!";
} else {
    $powitanie = "Dobry wieczór!";
}

$cytaty = [
    "Nigdy się nie poddawaj.",
    "Każdy dzień to nowa szansa.",
    "Sukces zaczyna się od działania.",
    "Wiedza to potęga.",
    "Małe kroki prowadzą do wielkich celów."
];

$losowyKlucz = array_rand($cytaty);
$wylosowanyCytat = $cytaty[$losowyKlucz];
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dynamiczna Karta Powitalna</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <div class="card">
        <h1><?php echo $powitanie; ?></h1>

        <p class="quote">
            „<?php echo htmlspecialchars($wylosowanyCytat, ENT_QUOTES, 'UTF-8'); ?>”
        </p>

        <button id="themeToggle">Zmień motyw</button>

        <button onclick="location.reload();">
            Losuj inny cytat
        </button>
    </div>

    <script src="script.js"></script>
</body>
</html>
