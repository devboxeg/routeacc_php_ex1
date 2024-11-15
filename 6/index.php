<?php
$active_page=6;
$title='Q'.$active_page;
$view = '';

$view .= '<h2>6- write a program to find the max number of numbers group [10,30,20], using if.</h2>';
$array = [10,30,20];
$view.='[10,30,20] =>   ';

if ($array[0] > $array[1] && $array[0] > $array[2]) {
    $view.= "The largest number is: $array[0]\n";
} elseif ($array[1] > $array[0] && $array[1] > $array[2]) {
    $view.= "The largest number is: $array[1]\n";
} else {
    $view.= "The largest number is: $array[2]\n";
}


require_once('../index.view.php');
