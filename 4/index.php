<?php
$active_page=4;
$title='Q'.$active_page;
$view = '';

$view .= '<h2>4- write a program to calculate the avg of numbers array.</h2>';
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
$sum=0;
for ($i=0; $i < count($array); $i++) { 
    $sum+=$array[$i];
}
$avg=$sum/count($array);
$view .='avg of [2, 4, 3, 1, 6, 7, 5, 8, 0, 9] => '.$avg;
require_once('../index.view.php');
