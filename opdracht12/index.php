<?php
$som=0;
$aantal=0;
$maximum=0;
$minimum=0;
$getallen=0;
if(isset($_POST["getallen"])){
    $getallen=$_POST["getallen"];
}
$getallen=preg_replace("~,~",".",$getallen);
$getallenArray=preg_split("/ /",$getallen);
$som=array_sum($getallenArray);
$aantal=count($getallenArray);
$maximum=max($getallenArray);
$minimum=min($getallenArray);
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Testpagina</title>
    </head>
    <body>
        Som is <?php echo $som?><br>
        Aantal is <?php echo $aantal?><br>
        Maximum is <?php echo $maximum?><br>
        Minimum is <?php echo $minimum?><br>
        <form method="POST" action="index.php">
            <input type="text" name="getallen" value="<?php echo $getallen?>"><br>
            <input type="submit" value="Verwerk">
        </form>
    </body>
</html>
