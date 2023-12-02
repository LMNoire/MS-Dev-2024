<?php
//Link with the Model lib_functions.php
include_once "../M/lib_functions.php";
//Array with places of the classroom
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
//Starting the session
session_start();
//Call the list of students to display from getCSVaction
$studentsList = $_SESSION["studentsToDisplay"]; 
//Call function to create an array with places and students name
$studentsLocations = createStudentLocations($placesList, $studentsList);
//Call function to explode, shuffle and merge the result in a new array
$studentsLocations = shuffleLocations($studentsLocations);
//Call function to save the csv file
$studensLocationsCSV = saveToCSVFile($studentsLocations);
//Send the result of the shuffleLocations to the display with a $_SESSION array
$_SESSION["studentsToDisplay"] = $studentsLocations ;
//Path of the direction
header('Location: ../V/displayShuffleCSV.php');

?>