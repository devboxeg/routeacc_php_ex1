<?php
$active_page=7;
$title='Q'.$active_page;
$view = '';

$view .= '<h2>7-Write a PHP script to increment date by one month
<br/>Sample date : 2012-12-21
<br/>Expected Output : 2013-01-21.</h2>';
$dt = strtotime("2012-12-21");

$view .= "output: ". date("Y-m-d", strtotime("+1 month", $dt))."\n";
require_once('../index.view.php');