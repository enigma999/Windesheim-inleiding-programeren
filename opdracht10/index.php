<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Testpagina</title>
    </head>
    <body>
        <?php
        if(key_exists("aantal",$_POST)){
            if($_POST["aantal"] <= 5 && $_POST["aantal"] >= 1) {
                for ($i = 1; $i <= $_POST["aantal"]; $i++) {
                    echo "*";
                }
            } else {
                echo "Ongeldige waarde";
            }
        echo "<br>";
        }
        ?>
        <form method="POST" action="index.php">
            <input type="text" name="aantal">
            <input type="submit">
        </form>
    </body>
</html>
