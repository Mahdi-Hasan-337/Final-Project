<?php
   session_start();
   session_destroy();
   header("Location: index.php"); // Redirect to login.php or any other page after logout
   exit;
?>
