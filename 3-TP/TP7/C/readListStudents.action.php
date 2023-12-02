<?php
//Path to the Model
include_once "../M/lib_function.php";
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
//Init students by calling a function
$studentsArray = selectListStudents();
//For each students of the array, read firstname from the DB
for ($i = 0; $i < sizeof($studentsArray); $i++) {
    $studentsList[$i] = $studentsArray[$i]['Firstname'];
}
//Call the function to create an array with firstname and places ($studentsLocation)
$studentsLocation = createStudentLocations ($placesList, $studentsList);
//Call the function to shuffle the firstname
$studentsLocation = shuffleLocations($studentsLocation);
//Load results in $_SESSION
$_SESSION ["students"] = $studentsLocation ;
//Location of destination
header ('Location: ../V/displayShuffle.php');
?>