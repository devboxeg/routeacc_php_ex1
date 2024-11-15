<?php
$active_page=9;
$title='Q'.$active_page;
$view = '';

$view .= '<h2>9-Write a PHP script that checks if a string contains another string.(using regular-expression).</h2>';

$input_string = "Write a PHP script that checks if a string contains another string";


$word="script";
$pattern = "/$word/";

$view.='(<i>'.$input_string."</i>) contains (<i>".$word."</i>) => ";
if (preg_match($pattern, $input_string)) {
    $view .= "True";
} else {
    $view .= "False";
}

require_once('../index.view.php');
