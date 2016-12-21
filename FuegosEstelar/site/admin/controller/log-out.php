<?php
session_start();
session_unregister("user");
session_destroy();
 //devuelvo al usuario al formulario
header ("location: ../index.php");
?>


