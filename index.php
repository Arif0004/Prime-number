<?php
$a = (int)readline('Enter number:');
$count = 0;
for ($i = 1; $i <= $a; $i++) {
    if ($a % $i == 0) {
        $count++;
    }
}
if ($count == 2) {
    echo $a . " is prime number:";
} else {
    echo $a . " is not prime number";
}
