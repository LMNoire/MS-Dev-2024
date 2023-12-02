<?php
// ce document html contient un formulaire avec un champ nommé `titre` dont les données sont envoyées par la méthode `get`
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Shuffle de la classe</title>
    <!--Link CSS-->
    <link href="SS_index.css" rel="stylesheet">
</head>
<body>
<br><br><br><br><br><br><br><br><br><br>
    <!--Shuffle button-->
    <div class=shuffle>
    <form id=button action="../C/displayShuffle.action.php" method="POST">
    <input type="submit" value="CLICK ME TO SHUFFLE" />
    </form>
    </div>
</body>
</html>