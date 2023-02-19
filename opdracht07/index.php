<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Testpagina</title>
    </head>
    <body>
        <form method="POST" action="resultaat.php">
            Voornaam: <input type="text" name="naam"><br>
            Aantal:
            <select name="aantal">
                <option selected="selected" value="1">Een</option>
                <option value="2">Twee</option>
                <option value="4">Vier</option>
                <option value="8">Acht</option>
                <option value="16">Zestien</option>
            </select><br>
            <input type="submit" value="GO!">
        </form>
    </body>
</html>
