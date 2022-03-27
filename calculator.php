<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculator</title>
</head>
<body>
<?php

$Operation = readline("Welke operatie wil je uitvoeren (+, -, %)");

if ($Operation !== '+' && $Operation !== '%' && $Operation !== '-') {
    exit("'$Operation'is geen geldige operatie");
}

$getal1 = readline("Eerste getal?" . PHP_EOL);
if (!is_numeric($getal1)) {
    exit("'$getal1' is geen getal" . PHP_EOL);
}
$getal2 = readline("Tweede getal?" . PHP_EOL);
if (!is_numeric($getal2)) {
    exit("'$getal2' is geen getal" . PHP_EOL);
}

if ($Operation === '+') {
    $a = $getal1 + $getal2;
}

if ($Operation === '-') {
    $a = $getal1 - $getal2;
}

if ($Operation === '%') {
    $a = $getal1 / $getal2;
}

if (is_numeric($a)) {
    echo "Uw resultaat is: " . $a;
} else {
    exit('is geen geldige resultaat');
}

?>
</body>
</html>
