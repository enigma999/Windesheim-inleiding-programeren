<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Testpagina</title>
</head>
    <body>
    <?php
    $cijfer=$_POST["rapportcijfer"];
    $leeftijd=$_POST["leeftijd"];
    if(key_exists("indruk",$_POST)){
        $indruk=$_POST["indruk"];
    }
    if($cijfer<0||$cijfer>=10||$leeftijd>120||$leeftijd<16){
        echo "Hey, een rapportcijfer moet tussen 1 en 10 liggen en leeftijd tussen 16 en 120!";
    }else{
        echo"je geeft de intro een $cijfer<br>";
        echo"je bent volgens je eigen zeggen $leeftijd jaar oud<br>";
        if(key_exists("indruk",$_POST)){
            echo"je vond de algemene indruk van de intro $indruk<br>";
        }
    }
    ?>
    <br><a href="index.php">Terug naar het evaluatieformulier...</a>
    </body>
</html>

