<?php
//Including lib_functions.php
include_once "../M/lib_functions.php";
//Session start
session_start();
//Init places of the classroom
$placesList = array("PLACE_1",
"PLACE_2",
"PLACE_3",
"PLACE_4",
"PLACE_5",
"PLACE_6",
"PLACE_7",
"PLACE_8",
"PLACE_9",
"PLACE_10",
"PLACE_11",
"PLACE_12",
"PLACE_13",
"PLACE_14",
"PLACE_15",
"PLACE_16");
//$pathfile takes $_FILES in an array
$pathfile = $_FILES['file']['tmp_name'];
//$numCol takes $_POST from the form in view/index.php with "column" as name
$numCol = $_POST["column"];
//Call getcolumnsFromCsv function with $pathfile and $numCol
$displayCSV = getcolumnsFromCsv($pathfile, $numCol);
//Include results in $_SESSION
$_SESSION ['displayCSV'] = $displayCSV;
//Send it to view/displayShuffleCSV.php
header ('Location: ../V/displayShuffleCSV.php');

?>