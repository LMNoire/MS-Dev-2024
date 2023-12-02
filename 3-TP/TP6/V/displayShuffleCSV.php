<!--PHP session start-->
<?php
session_start();
?>
<!--HTML head-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Plan de classe</title>
    <!--CSS stylesheet link-->
    <link href="SS_displayShuffle.css" rel="stylesheet">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<!--HTML body-->
<body>
    <!--Shuffle button-->
    <!--Not showing shuffle results because echo $_SESSION['displayCSV'] instead of echo $_SESSION['studentsToDisplay']-->
    <div class=shuffle>
        <form id=button action="../C/displayShuffle.action.php" method="POST">
        <input type="submit" value="CLICK ME TO SHUFFLE" />
        </form>
    </div>
    <br><br><br>
    <!--Choose a CSV file-->
    <div class="container">
    <div class="formulaire">   
    <form enctype="multipart/form-data" action="../C/loadStudentsFromCSV.action.php" method="post">
    <input class="file" name="file" type="file" /> 
    <!--Radio buttons to choose which column to display-->
    <div>
        <input type="radio" id="column1" name="column" value="1"/>
        <label for="column1">Column 1</label>
    </div>
    <div>
        <input type="radio" id="column2" name="column" value="2"/>
        <label for="column2">Column 2</label>
    </div>
    <div>
        <input type="radio" id="column3" name="column" value="3"/>
        <label for="column3">Column 3</label>
    </div>
    <!--Reload button to display choosen columns from the CSV into places-->  
    <div class="button">
        <input class="submit" name="submit" type="submit" value="RELOAD" />
        </form>
    </div>
    <div class="parent">
    <!--Div 1 to 16 = Places 1 to 16-->
    <div class="div1"><?PHP echo $_SESSION['displayCSV'][1][1]?></div>
    <div class="div2"><?PHP echo $_SESSION['displayCSV'][2][1]?></div>
    <div class="div3"><?PHP echo $_SESSION['displayCSV'][3][1]?></div>
    <div class="div4"><?PHP echo $_SESSION['displayCSV'][4][1]?></div>
    <div class="div5"><?PHP echo $_SESSION['displayCSV'][5][1]?></div>
    <div class="div6"><?PHP echo $_SESSION['displayCSV'][6][1]?></div>
    <div class="div7"><?PHP echo $_SESSION['displayCSV'][7][1]?></div>
    <div class="div8"><?PHP echo $_SESSION['displayCSV'][8][1]?></div>
    <div class="div9"><?PHP echo $_SESSION['displayCSV'][9][1]?></div>
    <div class="div10"><?PHP echo $_SESSION['displayCSV'][10][1]?></div>
    <div class="div11"><?PHP echo $_SESSION['displayCSV'][11][1]?></div>
    <div class="div12"><?PHP echo $_SESSION['displayCSV'][12][1]?></div>
    <div class="div13"><?PHP echo $_SESSION['displayCSV'][13][1]?></div>
    <div class="div14"><?PHP echo $_SESSION['displayCSV'][14][1]?></div>
    <div class="div15"><?PHP echo $_SESSION['displayCSV'][15][1]?></div>
    <div class="div16"><?PHP echo $_SESSION['displayCSV'][16][1]?></div>
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