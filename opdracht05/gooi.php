<?php
$aantal=$_POST["aantal"];
$totalewaarde=0;
?>
<html lang="nl">
<body>
<?php
    if($aantal<1){
        echo "aantal moet ingevult zijn<br>";
    }else{
        for($i=1;$i<$aantal+1;$i++){
            $worp=rand(1,6);
            $totalewaarde=$totalewaarde+$worp;
            echo "worp $i: $worp<br>";
        }
        $gemiddeldewaarde= $totalewaarde/$aantal;
        echo "totale waarde: $totalewaarde<br>";
        echo "gemidelde waarde: $gemiddeldewaarde<br>";
    }
?>
<a href="index.php">terug...</a>
</body>
</html>
