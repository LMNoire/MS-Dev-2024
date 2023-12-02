<?php
session_start();
//var_dump($_SESSION["students"]);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Plan de classe</title>
    <!--CSS-->
    <link href="SS_displayShuffle.css" rel="stylesheet">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
<!--Index link-->
<a href=index.php>Return to index</a>
<!--Button to shuffle students from the DB-->
<p>Shuffle students again from the DB</p>
<div class=shuffle>
    <form id=button action="../C/readListStudents.action.php" method="POST">
    <input type="submit" value="Click me to shuffle the DB again" />
    </form>
</div>
<div class="parent">
    <!--Div 1 to 16 = Places 1 to 16-->
    <div class="div1"><?PHP echo $_SESSION["students"]["PLACE_1"]?></div>
    <div class="div2"><?PHP echo $_SESSION["students"]["PLACE_2"]?></div>
    <div class="div3"><?PHP echo $_SESSION["students"]["PLACE_3"]?></div>
    <div class="div4"><?PHP echo $_SESSION["students"]["PLACE_4"]?></div>
    <div class="div5"><?PHP echo $_SESSION["students"]["PLACE_5"]?></div>
    <div class="div6"><?PHP echo $_SESSION["students"]["PLACE_6"]?></div>
    <div class="div7"><?PHP echo $_SESSION["students"]["PLACE_7"]?></div>
    <div class="div8"><?PHP echo $_SESSION["students"]["PLACE_8"]?></div>
    <div class="div9"><?PHP echo $_SESSION["students"]["PLACE_9"]?></div>
    <div class="div10"><?PHP echo $_SESSION["students"]["PLACE_10"]?></div>
    <div class="div11"><?PHP echo $_SESSION["students"]["PLACE_11"]?></div>
    <div class="div12"><?PHP echo $_SESSION["students"]["PLACE_12"]?></div>
    <div class="div13"><?PHP echo $_SESSION["students"]["PLACE_13"]?></div>
    <div class="div14"><?PHP echo $_SESSION["students"]["PLACE_14"]?></div>
    <div class="div15"><?PHP echo $_SESSION["students"]["PLACE_15"]?></div>
    <div class="div16"><?PHP echo $_SESSION["students"]["PLACE_16"]?></div>
    <!--Moussa's desk-->
    <div class="div17">BUREAU DE MOUSSA<br><img id="computerpic" src="computer.png"></div>
    <!--Table 1-->
    <div class="div18"></div>
    <!--Table 2-->   
    <div class="div19"></div>
    <!--Table 3-->
    <div class="div20"></div>
    <!--Table 4-->
    <div class="div21"></div>
</div>

</body>
</html>


