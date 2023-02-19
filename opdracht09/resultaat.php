<?php
$URL1=$_POST["URL1"];
$URL2=$_POST["URL2"];
$URL3=$_POST["URL3"];
?>
<!DOCTYPE html>
<html lang="nl">
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<head>
    <meta charset="utf-8">
    <title>Testpagina</title>
</head>
<body>
<table>
    <tr>
        <td>
            <?php
                echo "<a href='http://$URL1'>$URL1<br>"
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            echo "<a href='http://$URL2'>$URL2<br>"
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            echo "<a href='http://$URL3'>$URL3<br>"
            ?>
        </td>
    </tr>
</table>

</body>
</html>
