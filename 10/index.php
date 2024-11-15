<?php
$active_page=10;
$title='Q'.$active_page;
$view = '';

$view .= '<h2>10- Write a function to check whether a number is prime or not.
<br/>Note: A prime number (or a prime) is a natural number greater than 1 that has no positive divisors other than 1 and itself</h2>';

function primeCheck($number){
    if ($number == 1)
    return 0;
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return false;
    }
    return true;
}

for ($i=1; $i <= 100 ; $i++) { 
    if (primeCheck($i)) {
        $view .= $i.' => ';
        $view .= 'Prime';
    }
    else
    {
        continue;
    }
    $view .='<br />';
}

require_once('../index.view.php');
