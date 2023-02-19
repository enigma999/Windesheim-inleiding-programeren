<!doctype html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Testpagina</title>
    </head>
    <body>
    Beste student, je hebt meegedaan aan de introductie. We willen graag weten wat je daar van vond. Vul je algemene inddruk in, geeft de introductie een rapportcijfer en vul tenslotte je leeftijd in. verstuur daarna het formulier.
    <form action="resultaat.php" method="post">
        Rapportcijfer: <input type="text" name="rapportcijfer"><br>
        leeftijd: <input type="text" name="leeftijd"><br>
        algemene indruk<br>
        <input type="radio" name="indruk" value="super" checked> Super<br>
        <input type="radio" name="indruk" value="goed"> Goed<br>
        <input type="radio" name="indruk" value="matig"> Matig<br>
        <input type="radio" name="indruk" value="slecht"> Slecht<br>
        <input type="submit">
    </form>
    </body>
</html>
