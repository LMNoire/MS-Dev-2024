<?php
/* Inputs :
$placesList -> tab to list all the places in the class; max size : 16
$studentsList -> tab to list all students
return an array [K,V] ex: [[PLACE_1] => "JEREMY", [PLACE_2] => "LORENA"]*/
function createStudentLocations(Array $placesList, Array $studentsList) : Array {
    if (sizeof($placesList) == sizeof($studentsList)) {
        $studentsLocations = array_combine($placesList, $studentsList);
        return $studentsLocations;
        }
    if ($placesList > $studentsList) {
        while (sizeof($placesList) > sizeof($studentsList)) {
        array_push($studentsList, "");
        }
        $studentsLocations = array_combine($placesList, $studentsList);
        return $studentsLocations;    
        } 
    if ($placesList < $studentsList) {
        while(sizeof($placesList) < sizeof($studentsList)) {
        array_pop($studentsList);
        }
        $studentsLocations = array_combine($placesList, $studentsList);
        return $studentsLocations;
        }
    }
/*$studentsLocations array [K,V] ex: [[PLACE_1] => "JEREMY", [PLACE_2] => "LORENA"]  
return the same array shuffled; only values will be randomized*/ 
function shuffleLocations(Array $studentsLocations) : Array {
   $Keys = array_keys($studentsLocations);
   $Values = array_values($studentsLocations);
   shuffle($Values);
   $studentsLocations = array_combine($Keys, $Values);
   return $studentsLocations;
   }
/*save  $studentsLocations to CSV format.
fileName to backup is : csv_backup_DDMMYYYY_HH:MM:SS.csv*/
function saveToCSVFile(array $studentsLocations):void{
    $d = date_create();
    $var = date_format($d, 'd-m-Y\TH-i-s');
    $nameFile = "csv_backup_$var.csv";
    $path = fopen('..\CSV_Backups\.'.$nameFile, "w") ;
    // creation d un tableau  avec en tete (nom, prenom) et envoi de données
    fputcsv($path, array('place', 'prenom'),";");
    foreach ($studentsLocations as $key => $value) {
    // Formate une ligne en CSV et l'écrit dans un fichier
    fprintf($path, "%s;%s", $key, $value);
    }
    fclose($path);
    }
/*import CSV file to array*/
function CSVFileToArray(String $pathFile): Array {
    $file_to_read = fopen($pathFile, 'r');
    while (!feof($file_to_read) ) {
    $lines[] = fgetcsv($file_to_read, null, ',');
    }
    fclose($file_to_read);
    return $lines;   
    }    
/*choose the columns you want to appear*/
function getcolumnsFromCsv(string $pathFile, int $col):Array {
    $file_to_read = fopen($pathFile, 'r');
    $nbLinesFile = count(file("$pathFile"));
    for ($i = 0; $i < $nbLinesFile; $i++) {
    $tabCSV[] = fgetcsv($file_to_read, 1000, ";");
    }
    fclose($file_to_read);
    foreach ($tabCSV as $line) {
    if ($col == 0) {
        $newArray[] = $line[0]; // On affiche que les places si $col = 0
        }
    elseif ($col < 0) {
        $newArray = $tabCSV; // On affiche toutes les colonnes si $col = -1
        }  
    elseif ($col > count($tabCSV[0])) {
        $newArray = []; //On affiche un tableau vide si $col est plus grand que le nombres de colones du CSV
        }
    elseif ($col <= count($tabCSV[0])) {
        $newArray[] = [$line[0], $line[$col]]; // On affiche les colonnes qu'on désire affiché avec la colonne des places par défault
        }
    }
    return $newArray;
    }
//Function to send back students from the DB
function selectListStudents() : array {
    //Driver to the DB (localhost or IP address) then DB name
    $bdd = new PDO('mysql:host=localhost;dbname=bdd_students;charset=utf8mb4', 'root', '');
    //Ask to prepare the querie from the selected table and put it in a statement variable
    $stmt = $bdd->prepare("SELECT * FROM `students`; ");
    //Execute the statement variable
    $stmt->execute();
    //Call back all the lines from the table
    $listStudents = $stmt->fetchAll();
    return $listStudents;
    }
//Function to add a student to the DB
    function insertsStudents($name, $firstName, $gender) : void {
    $bdd = new PDO('mysql:host=localhost;dbname=bdd_students;charset=utf8mb4', 'root', '');
    $sql = "INSERT INTO students (name, firstname, gender) VALUES (?,?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$name, $firstName, $gender]);
    }
//Function to edit a student from the DB
function editStudent($idStudent, $firstName) : void {
    $bdd = new PDO('mysql:host=localhost;dbname=bdd_students;charset=utf8mb4', 'root', '');
    $sql = "UPDATE students SET Firstname='$firstName' WHERE id=$idStudent";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    }
//Function to delete a student from the DB
function deleteStudents($id) : void {
    $bdd = new PDO('mysql:host=localhost;dbname=bdd_students;charset=utf8mb4', 'root', '');
    $sql = "DELETE FROM students WHERE id = $id";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    }
?>
