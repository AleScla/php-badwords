<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <h1>Baaaaad words</h1>
    <form action="./wordfilter.php" method="GET">
        <div>
            Inserisci una frase <br>
            <textarea name="text" id="text"></textarea>
        </div>
        <br><br>
        <div>
            La parola inserita qui verrà censurata <br>
            <input type="text" name="censored" id="censored">
        </div>
        <button type="submit">INVIA</button>
    </form>

    </body>
</html>