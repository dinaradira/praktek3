<?php

$a = true;
$b = false;

$c = $a && $b;
printf("%b && %b = %b", $a,$b,$c);
echo "<hr>";

$c = $a || $b;
printf("%b || %b = %b", $a,$b,$c);
echo "<hr>";

$c = !$a;
printf("!%b = %b", $a, $c);
echo "<hr>";

?>