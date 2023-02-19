<?php
$naam=$_POST["naam"];
$aantal=$_POST["aantal"];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Testpagina</title>
</head>
<body>
<?php
for($i=0;$i<$aantal;$i++){
    echo "$naam ";
}
?>
</body>
</html>
