<?php
// include path the the lib_functions file
include_once "../M/lib_functions.php";

$pathFile = '..\CSV_Backups\.csv_backup_02-11-2023T09-30-21.csv';

$pathFile = CSVFileToArray($pathFile);

print_r($pathFile);





?>
