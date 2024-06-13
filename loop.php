<?php

$employesDetails = [
    'Sales' => ['Jim', 'Paul', 'Dwilite'],
    'Accounting' => ['Rony', 'Papel', 'Tanvir'],
    'HR' => ['Jim', 'TObyy', 'HOlly'],
    'WireHouse' => ['Darel', 'Pias', 'Roy']
];

$departments = array_keys($employesDetails);

for ($i = 0; $i < count($departments); $i++) {
    echo "Departments: " . $departments[$i];

    $employees = $employesDetails[$departments[$i]];
    for ($j = 0; $j < count($employees); $j++) {
        echo "<br>";
        echo " - " . $employees[$j];
    }
    echo "<br><br>";
}
