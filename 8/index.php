<?php
$active_page=8;
$title='Q'.$active_page;
$view = '';

$view .= '<h2>8- Write a PHP script to get the number of the month before the current month.</h2>';
$view .= "output: ".date('m', strtotime('-1 month'))."\n";

require_once('../index.view.php');
