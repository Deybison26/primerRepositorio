<?Php

$numberA = 2;
$numberB = 8;
$numberC = 1;

if (($numberA > $numberB) & ($numberA > $numberC)) {
    echo ("el numero mayor es: " . $numberA);
} elseif (($numberB > $numberA) & ($numberB > $numberC)) {
    echo ("el numero mayor es: " . $numberB);
} elseif (($numberC > $numberA) & ($numberC > $numberB)) {
    echo ("el numero mayor es: " .  $numberB);
}
