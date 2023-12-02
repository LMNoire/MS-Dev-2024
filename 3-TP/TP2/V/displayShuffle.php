<?php
session_start();
//var_dump($_SESSION["studentToDisplay"])
?>


<table border="1">
     
    <?php foreach ($_SESSION["studentToDisplay"] as $key => $value) {?>
         
        <tr>
            
                 
                <td>
                    <?php echo $key ;?>
                   
                </td>
                <td>
                    <?php echo "$value \n";?>
                </td>
                 
           
        </tr>
         
    <?php } ?>
     
</table>
