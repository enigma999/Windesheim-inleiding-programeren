<?php
$fiets=$_POST["fiets"];
$wielen=$_POST["wielen"];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Testpagina</title>
</head>
<body>
<?php
if($fiets=="true"&&$wielen==1){
    echo"aha, je hebt een circusfiets!";
}elseif($fiets=="true"&&$wielen>2){
    echo "jij hebt een rare fiets!";
}elseif($fiets=="false"&&$wielen==0){
    echo "jij hebt vast en zeker een boot";
}else{
    echo "ik heb geen idee wat voor vervoersmiddel je hebt";
}
?>
</body>
</html>
