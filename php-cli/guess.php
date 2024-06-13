<?php

$options = getopt("", ["min::", "max::"]);

$min = $options["min"] ?? 1;

$max = $options["max"] ?? 10;

$number = rand($min, $max);

while (true) {
    echo "What is the number ?";
    $guess = trim(fgets(STDIN));

    if (!is_numeric($guess)) {
        echo "Enter a valid number.\n";
        continue;
    }
    $guess = (int)$guess;

    if ($guess == $number) {
        printf("Yes, You are correct\n");
        break;
    } else if ($guess > $number) {
        printf("Guess a smaller Number\n");
    } else {
        printf("Guess a higher number\n");
    }
}
