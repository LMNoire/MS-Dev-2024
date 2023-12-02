<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Plan de classe</title>
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
<!--Form to delete a student to the DB-->
<p>Delete a student from the DB</p>
<form action="../C/deleteDBStudents.action.php" method="POST">
    <!--ID-->
    <label for="idStudent">Student ID</label>
    <input name="idStudent" type="text"/>
    <input type="submit" value="envoyer"/>
</form>
<br><br>
<p>List of the students from the DB</p>
</body>
</html>
