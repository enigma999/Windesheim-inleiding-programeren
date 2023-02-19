<?php
$aantal=$_POST["aantal"];
?>
<html lang="nl">
<body>
<?php
    if($aantal<1){
        echo "aantal moet ingevult zijn<br>";
    }else{
        for($i=1;$i<$aantal+1;$i++){
            $worp=rand(1,6);
            echo "worp $i: $worp<br>";
        }
    }
?>
<a href="index.php">terug...</a>
</body>
</html>
