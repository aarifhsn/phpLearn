<?php

$n = 3;
$factorial = 1;

for ($i = $n; $i > 1; $i--) {
    $factorial = $factorial * $i;
}

echo "factorial of " . $n . " is " . $factorial;
