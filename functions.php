<?php
$years = [2010, 2012, 2014];
$anonymousFunction = function ($years) {
    return $years += 10;
};
$result =  array_map($anonymousFunction, $years);

print_r($result);

date_default_timezone_set('Asia/Dhaka');
function greet($name, $customGreeting)
{
    echo "Hello" . $name;
    $customGreeting();
}

greet("Arif", function () {
    $time = date('h,i');
    echo "Have a great day. Its" . $time . '<br>';
});

$ratings = 3;
for ($i = 1; $i <= 5; $i++) {
    echo ($i <= $ratings) ? "✰" : "✧";
}
