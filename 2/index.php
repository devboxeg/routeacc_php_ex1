<?php
    $active_page=2;
    $title='Q'.$active_page;
    $view='';
    
    $view.='<h2>2- write a PHP program to print this shape (using nested loop)</h2>';
    $view.='<h3>Shape-1</h3>';
        for($i=0;$i<=5;$i++){
            for ($d=5-$i; $d > 0; $d--)  {
                $view.= "&nbsp;&nbsp;";
            }
            for($j=1;$j<=$i;$j++){
                $view.= "&nbsp;"."*"."&nbsp;";
            }
            $view.= "<br>";
        }
        for($i=4;$i>=1;$i--){
            for ($d=0; $d <= 4-$i; $d++)  {
                $view.=  "&nbsp;&nbsp;";
            }
            for($j=$i;$j>=1;$j--){
                $view.= "&nbsp;"."*"."&nbsp;";
            }
            $view.= "<br>";
        }
    $view.='<h3>Shape-2</h3>';
        for($i=0;$i<=5;$i++){
            /*
            for ($d=10-$i; $d > 0; $d--)  {
                $view.= "&nbsp;&nbsp;"';
            }
            */
            for($j=1;$j<=$i;$j++){
                $view.= "&nbsp;"."*"."&nbsp;";
            }
            $view.= "<br>";
        }
        for($i=5;$i>=1;$i--){
            /*
            for ($d=0; $d <= 9-$i; $d++)  {
                $view.=  "&nbsp;&nbsp;"';
            }
            */
            for($j=$i;$j>=1;$j--){
                $view.= "&nbsp;"."*"."&nbsp;";
            }
            $view.= "<br>";
        }
        $view.='<h3>Shape-3</h3>';
        for($i=0;$i<=4;$i++){
            /*
            for ($d=10-$i; $d > 0; $d--)  {
                $view.= "&nbsp;&nbsp;"';
            }
            */
            if($i==3)
            {
                continue;
            }
            for($j=1;$j<=$i;$j++){
                $view.= "&nbsp;"."*"."&nbsp;";
            }
            $view.= "<br>";
        }
        for($i=2;$i>=1;$i--){
            /*
            for ($d=0; $d <= 9-$i; $d++)  {
                $view.=  "&nbsp;&nbsp;"';
            }
            */
            for($j=$i;$j>=1;$j--){
                $view.= "&nbsp;"."*"."&nbsp;";
            }
            $view.= "<br>";
        }
    require_once('../index.view.php');
