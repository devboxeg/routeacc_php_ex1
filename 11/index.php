<?php
$active_page = 11;
$title = 'Q' . $active_page;
$view = '';

$view .= '<h2>11- Use a cookie to change the default website background color. choose the new color from a dropdown menu of colors.</h2>';
?>

<?php
/*Save COOKIE from GET*/
if (isset($_GET['color'])&&isset($_GET['opt'])) {
    setcookie('ck_color', $_GET['color'], time() + (86400 * 30), "/"); // 86400 = 1 day
    $bgc = $_GET['color'];
    echo '<br/>s1<br/>';
    var_dump($bgc);

    setcookie('ck_drop', $_GET['opt'], time() + (86400 * 30), "/"); // 86400 = 1 day
    $active = $_GET['opt'];
    echo '<br/>s2<br/>';
    var_dump($active);

    header("Refresh:0; url=.");
}
/*Read COOKIE*/
#read _COOKIE saved drop selection
if (isset($_COOKIE['ck_drop'])) {
    $active = $_COOKIE['ck_drop'];
    // echo '<br/>s3<br/>';
    // var_dump($active);
} else {
    $active = 1;
    // echo '<br/>s4<br/>';
    // var_dump($active);
}
#read _COOKIE saved color selection
if (isset($_COOKIE['ck_color'])) {
    $bgc = $_COOKIE['ck_color'];
    // echo '<br/>s5<br/>';
    // var_dump($bgc);
} else {
    $bgc = 'cornsilk';
    // echo '<br/>s6<br/>';
    // var_dump($bgc);
}


$view .= '<select id="background">';
$view .= "<option " . (($active == 1) ? 'selected' : '') . " value='1' style='background:red'>Apple</option>";
$view .= "<option " . (($active == 2) ? 'selected' : '') . " value='2' style='background:yellow'>Banana</option>";
$view .= "<option " . (($active == 3) ? 'selected' : '') . " value='3' style='background:red'>purple</option>";
$view .= '</select>';
$view .= '<button onclick="myFunction()">Change Background</button>';

?>
<?php require_once('../index.view.php'); ?>
<script>
    const arr_colors = ["red", "yellow", "purple"];
    function myFunction() {
        var sel1 = document.getElementById('background');
        switch (sel1.value) {
            case "1":
                window.location.href = './?color=' + arr_colors[0] + '&opt=1';
                break;
            case "2":
                window.location.href = './?color=' + arr_colors[1] + '&opt=2';
                break;
            case "3":
                window.location.href = './?color=' + arr_colors[2] + '&opt=3';
                break;
            default:
                break;
        }
        // document.body.style.backgroundColor = '<?= $bgc ?>';
    }
    document.body.style.backgroundColor = '<?= $bgc ?>';
</script>