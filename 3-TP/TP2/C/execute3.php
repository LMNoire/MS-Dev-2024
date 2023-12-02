<?php
// include path the the lib_functions file
include_once "../M/lib_functions.php";

$pathFile = '..\CSV_Backups\.csv_backup_02-11-2023T09-30-21.csv';

$pathFile = getcolumnsFromCsv($pathFile, -1);
print_r($pathFile)



?>

<!DOCTYPE html>
<html>
<body>
<table >
  <tr>
    <td><?php echo  $_SESSION["studentToDisplay"][0]?></td>
    <td>Prénom</td>

    
  </tr>
  <tr>
    <td><?php echo  $_SESSION["studentToDisplay"][1]?></td>
    <td>Pierre</td>

    
  </tr>
  <tr>
    <td><?php echo $_SESSION["studentToDisplay"][2]?></td>
    <td>Pauline</td>

    
  </tr>
  <tr>
    <td><?php echo  $_SESSION["studentToDisplay"][3]?></td>
    <td>Prénom</td>

    
  </tr>
  <tr>
    <td><?php echo  $_SESSION["studentToDisplay"][4]?></td>
    <td>Prénom</td>

    
  </tr>
  <tr>
    <td><?php echo  $_SESSION["studentToDisplay"][5]?></td>
    <td>Prénom</td>

    
  </tr>
  <tr>
    <td><?php echo  $_SESSION["studentToDisplay"][6]?></td>
    <td>Prénom</td>

    
  </tr>
  <tr>
    <td><?php echo  $_SESSION["studentToDisplay"][7]?></td>
    <td>Prénom</td>

    
  </tr>
  <tr>
    <td><?php echo  $_SESSION["studentToDisplay"][8]?></td>
    <td>Prénom</td>

    
  </tr>
  <tr>
    <td><?php echo  $_SESSION["studentToDisplay"][9]?></td>
    <td>Prénom</td>

    
  </tr>
  <tr>
    <td><?php echo  $_SESSION["studentToDisplay"][10]?></td>
    <td>Prénom</td>

    
  </tr>
  <tr>
    <td><?php echo  $_SESSION["studentToDisplay"][11]?></td>
    <td>Prénom</td>

    
  </tr>
  <tr>
    <td><?php echo  $_SESSION["studentToDisplay"][12]?></td>
    <td>Prénom</td>

    
  </tr>
  <tr>
    <td><?php echo  $_SESSION["studentToDisplay"][13]?></td>
    <td>Prénom</td>

    
  </tr>
  <tr>
    <td><?php echo  $_SESSION["studentToDisplay"][14]?></td>
    <td>Prénom</td>

    
  </tr>
  <tr>
    <td><?php echo  $_SESSION["studentToDisplay"][15]?></td>
    <td>Prénom</td>

    
  </tr>
  <tr>
    <td><?php echo  $_SESSION["studentToDisplay"][16]?></td>
    <td>Prénom</td>

    
  </tr>
</table>

</body>

 </html>       
