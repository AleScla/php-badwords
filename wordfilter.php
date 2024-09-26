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
    <h1>Risultato con censure:</h1>
    <p>La frase senza censure è:</p>
    <p>
        <?php echo $_GET['text'] ?> <br>
        di lunghezza : <?php echo strlen($_GET['text']) ?> 
    </p>
    <p>
        La frase censurata è:
    </p>
    <p>
            <?php echo str_replace($_GET['censored'],'***',$_GET['text'])?>
            di lunghezza : <?php echo strlen(str_replace($_GET['censored'],'***',$_GET['text']))?>
    </p>

    <a href="index.php">Torna alla pagina iniziale</a>
</body>
</html>