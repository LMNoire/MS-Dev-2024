<?php
//Path to the Model
include_once "../M/lib_function.php";
//Import ID of the student to edit
$idStudent = $_POST['idStudent'] ;
$firstName = $_POST['studentFirstname'];
//Call the function to edit the student from the DB with the ID
editStudent($idStudent, $firstName) ;
header ('Location: ../V/displayShuffle.php')
?>