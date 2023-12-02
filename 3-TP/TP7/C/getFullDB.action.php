<?php
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

$studentsArray = selectListStudents();

for ($i = 0; $i < sizeof($studentsArray); $i++) {
    $studentsList[$i] = $studentsArray[$i]['Firstname'];
}

$studentsLocation = createStudentLocations ($placesList, $studentsList);
$studentsLocation = shuffleLocations($studentsLocation);
$_SESSION ["students"] = $studentsLocation ;

header ('Location: ../V/displayShuffle.php');

?>