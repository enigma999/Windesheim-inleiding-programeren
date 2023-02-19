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
    $indruk=$_POST["indruk"];
    if($cijfer<0||$cijfer>=10||$leeftijd>120||$leeftijd<16){
        echo "Hey, een rapportcijfer moet tussen 1 en 10 liggen en leeftijd tussen 16 en 120!";
    }elseif((($cijfer>=1&&$cijfer<=3)&&$indruk=="slecht")||(($cijfer>=4&&$cijfer<=5)&&$indruk=="matig")||(($cijfer>=6&&$cijfer<=8)&&$indruk=="slecht")||(($cijfer>=9&&$cijfer<=10)&&$indruk=="slecht")) {
        echo"je geeft de intro een $cijfer<br>";
        echo"je bent volgens je eigen zeggen $leeftijd jaar oud<br>";
        echo"je vond de algemene indruk van de intro $indruk<br>";
    }else{
        echo"dus je wilde beweren dat $cijfer gewoon $indruk is?";
    }
    ?>
    <br><a href="index.php">Terug naar het evaluatieformulier...</a>
    </body>
</html>

