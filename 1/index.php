<style>
    td{
        text-align: center;
    }
</style>
<?php
    $active_page=1;
    $title='Q'.$active_page;
    $view='';
    
    $view.='<h2>1- Write a PHP script using a nested for loop that creates a chessboard.</h2>';
    $view.='<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">';
            $td='<td height=30px width=30px bgcolor=';
            for ($row = 1; $row <= 8; $row++) {
                $view.= "<tr>";
                for ($col = 1; $col <= 8; $col++) {
                    $total = $row + $col;
                    if ($total % 2 == 0) {
                        $view.= "$td#FFF>".(($row==1&&$col==1)?'♖':'')."</td>";
                    } else {
                        $view.= "$td#000></td>";
                    }
                }
                $view.= "</tr>";
            }
    $view.='</table>';
    require_once('../index.view.php');