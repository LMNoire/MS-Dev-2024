<?php

/*Inputs :
    $placesList -> tab to list all the places in the class; max size : 16
    $studentsList -> tab to list all students
    return an array [K,V] ex: [[PLACE_1] => "JEREMY", [PLACE_2] => "LORENA"]  
*/
function createStudentLocations(array $placesList, array $studentsList) : mixed{
    
    while (count($placesList) == count($studentsList)) {
    $studentsLocations = array_combine($placesList, $studentsList);
    return $studentsLocations;
    }
    
    if (count($placesList) > count($studentsList)){
    array_push( $studentsList, " ");
    $studentsLocations = array_combine($placesList, $studentsList);
    return $studentsLocations;
    }

    if (count($placesList) < count($studentsList)){
        for ($i=0; count($placesList) < count($studentsList); $i++){ 
            array_pop($studentsList);
        }
    $studentsLocations = array_combine($placesList, $studentsList);
    return $studentsLocations;
    }
}

/*
    $studentsLocations array [K,V] ex: [[PLACE_1] => "JEREMY", [PLACE_2] => "LORENA"]  
    return the same array shuffled; only values will be randomized 
*/ 
function shuffleLocations(array $studentsLocations) : array{
    $keyTabs = array_keys($studentsLocations);
    $ValuesTabs = array_values($studentsLocations);
    shuffle($ValuesTabs);
    $studentsLocations = array_combine($keyTabs, $ValuesTabs);
    return $studentsLocations;
}

/*
    save  $studentsLocations to CSV format.
    fileName to backup is : csv_backup_DDMMYYYY_HH:MM:SS.csv 
*/
function saveToCSVFile(array $studentsLocations):void{
    $d = date_create();
    $dategood = date_format($d, "d-m-y");
     
    $file = fopen("../CSV_backups/".$dategood.".csv", "w");

    foreach ($studentsLocations as $placesList => $studentsList) {
        fputcsv($file, array($placesList, $studentsList),";");
    }
fclose($file);


}
?>

