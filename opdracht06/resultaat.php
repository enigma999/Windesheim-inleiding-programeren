<?php
$browser=$_POST["browser"];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Testpagina</title>
</head>
<body>
<?php
echo "je gebruikt bij voorkeur $browser<br>";
if($browser=="Internet Explorer"){
    echo "Weet je het zeker? Je mag nog verandren. <a href='index.php'>Klik hier</a>";
}else{
    echo"Een goede keuze";
}
?>
</body>
</html>
