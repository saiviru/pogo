<?php
  session_start();


    unset($_SESSION['User']);
    unset($_SESSION['id']);
    session_destroy();
    header("location:index.php");


?>
