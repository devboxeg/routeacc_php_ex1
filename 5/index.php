<?php
$active_page=5;
$title='Q'.$active_page;
$view = '';

$view .= '<h2>5- write a program to filter even numbers from an array, delete all even numbers.</h2>';
$array = [0,1,2,3,4,5,6,7,8,9];
$view.='[0,1,2,3,4,5,6,7,8,9]=>[';

$arr2=[];
foreach ($array as $i) {
    if($i%2!==0)
    {
        $arr2[]=$i;
    }
}
$array=$arr2;
for ($i=0; $i < count($array); $i++) { 
    $view .= "$array[$i]";
    if($i==count($array)-1)
    {
        break;
    }
    $view .= ',';
}
$view .= ']';

require_once('../index.view.php');
