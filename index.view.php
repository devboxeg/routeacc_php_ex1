<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?='Exam1_'.$title?></title>
    <style>
        .qnav td{
            padding: 5px;
            width: 20px;
            text-align: center;
            background-color: brown;
        }
        .qnav td:first-child{
            background-color: wheat;
            width: 100px;
        }
        .qnav a {
            color: wheat;
            text-decoration: none;
        }
        td.active
        {
            background-color:black;
        }
    </style>
</head>
<body>
    <h1>Route PHP Exam-01 (L.H)</h1>
    <table border="1" class="qnav">
        <tr>
            <td>Question No#</td>
            <?php
                for ($i=1; $i<12 ; $i++) {
                    $active= $active_page==$i?'class="active"':'';
                    echo "<td $active ><a href='../$i'>$i</a></td>";
                }
            ?>
        </tr>
    </table>
    <?=$view?>
</body>
</html>