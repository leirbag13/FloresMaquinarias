<?php
session_start();
if (isset($_SESSION['user']))
{
     require_once("../view/my-acount.tpl");

}

   else
     {
             header ("location: ../index.php");
     }


?>

