<?php

// 0, 1, 1, 2, 3, 5, 8, 13, 21;
$initial = 0;
$old = 1;
$new = 1;

while ($initial <= 500) {
    echo $initial . ", ";
    $initial = $old;
    $old = $new;
    $new = $initial + $old;
}
