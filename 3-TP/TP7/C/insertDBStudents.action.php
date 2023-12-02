<?php
//Path to the Model
include_once "../M/lib_function.php";
//Import in students DB with $_POST from index.php form 
$name = $_POST['name'];
$firstName = $_POST['firstname'];
$gender = $_POST['gender'];
//Call the function to insert name, firstname and gender of a student in the DB
insertsStudents($name, $firstName, $gender);
//If one of the field is NULL, error page, elseif get succes
if (trim($_POST['firstname']) OR trim($_POST['name']) OR trim($_POST['gender'])==!NULL) {
	header('Location: ../V/get1_success.php');
}
else header('Location: ../V/get1_error.php');
?>