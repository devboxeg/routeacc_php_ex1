<?php
$active_page=3;
$title='Q'.$active_page;
$view = '';

$view .= '<h2>3- $array = [2,4,3,1,6,7,5,8,0,9] .<br/> Write a PHP program to sort this array to ASC and also sort it as DESC . (without using built in functions)</h2>';
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
function bubbleSort($array)
{
    if (!$length = count($array)) {
        echo 'return array';
        return $array;
    }
    for ($outer = 0; $outer < $length; $outer++) {
        for ($inner = 0; $inner < $length; $inner++) {
            if ($array[$outer] < $array[$inner]) {
                $tmp = $array[$outer];
                $array[$outer] = $array[$inner];
                $array[$inner] = $tmp;
            }
        }
    }
    return $array;
}
$array=bubbleSort($array);
$view .='[';
for ($i=0; $i < count($array); $i++) { 
    $view .= "$array[$i]";
    if($i==count($array)-1)
    {
        break;
    }
    $view .= ',';
}
$view .=']';
require_once('../index.view.php');
