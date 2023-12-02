<?php
//Path to the Model
include_once "../M/lib_function.php";
//Import ID of the student to delete 
$idStudent = $_POST['idStudent'] ;
//Call the function to delete the student from the DB with the ID
deleteStudents($idStudent) ;
header ('Location: ../V/displayShuffle.php')
?>
