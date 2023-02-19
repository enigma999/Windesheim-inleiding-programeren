<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Testpagina</title>
    </head>
    <body>
        <form method="POST" action="resultaat.php">
            heb je een fiets?:<br>
            <input type="radio" name="fiets" value="true" checked>fiets<br>
            <input type="radio" name="fiets" value="false">geen fiets<br>

            hoeveel wielen heeft jouw voertuig?:<br>
            <select name="wielen">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select><br>
            <input type="submit">
        </form>
    </body>
</html>
