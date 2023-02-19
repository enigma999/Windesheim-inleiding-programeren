<html lang="nl">
    <body>
        <?php
        $naam=$_POST["naam"];
        $leeftijd=$_POST["leeftijd"];
        $aantaljaar=(18-$leeftijd);
        if($naam==null){
            echo "naam is verplicht!<br>";
        }elseif ($leeftijd==null){
            echo "leeftijd is verplicht!<br>";
        }else{
            if($leeftijd<0){
                echo "leeftijd moet groter of gelijk zijn aan 0.";
            }elseif($leeftijd>18){
                echo "$naam is nu eigenlijk pas echt volwassen!";
            }else{
                echo "over $aantaljaar jaar is $naam volwassen.";
            }
        }
        ?>
    </body>
</html>