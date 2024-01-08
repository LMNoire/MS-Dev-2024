<?php
    session_start();
    session_destroy();
    header("Location: ../V/index.php");
?>