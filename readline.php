<?php
$secretPass = 'secter';

$userInput = '';

while ($userInput !== $secretPass) {
    $userInput = readline('Enter the password');
}
echo "Access Granted";
