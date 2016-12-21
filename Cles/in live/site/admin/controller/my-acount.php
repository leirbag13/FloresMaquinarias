<?php
session_start();
if (isset($_SESSION['user']))
{
     require_once("../view/my-acount.php");

}

   else
     {
             header ("location: ../index.php");
     }


?>

