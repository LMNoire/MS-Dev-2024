<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <!--Link CSS-->
    <link href="SS_index.css" rel="stylesheet">
</head>
<body>
<!--Form to add a student to the DB-->
<p>Add a student to the DB</p>
<form action="../C/insertDBStudents.action.php" method="POST">
    <!--Name-->
    <label for="name">Name</label>
    <input name="name" type="text" required/>
    <!--Firstname-->
    <label for="firstname">Firstname</label>
    <input name="firstname" type="text" required/>
    <!--Gender-->	
    <label for="gender">Gender</label>
    <input name="gender" type="text" />
    <input type="submit" value="envoyer" required/>
</form>
<br><br><br>
<!--Form to delete a student to the DB-->
<p>Delete a student from the DB</p>
<form action="../C/deleteDBStudents.action.php" method="POST">
    <!--ID-->
    <label for="idStudent">Student ID</label>
    <input name="idStudent" type="text"/>
    <input type="submit" value="envoyer"/>
</form>
<br><br><br>
<!--Form to edit a student firstname to the DB-->
<p>Edit a student firstname from the DB</p>
<form action="../C/updateDBStudents.action.php" method="POST">
    <!--Firstname-->
    <label for="idStudent">Student ID</label>
    <input name="idStudent" type="text"/>
    <label for="studentFirstname">New firstname</label>
    <input name="studentFirstname" type="text"/>
    <input type="submit" value="envoyer"/>
</form>
<br><br><br>
    <!--Button to shuffle students from the DB-->
    <p>Shuffle students from the DB</p>
<div class=shuffle>
    <form id=button action="../C/readListStudents.action.php" method="POST">
    <input type="submit" value="Click me to shuffle students DB" />
    </form>
</div>
</body>
</html>