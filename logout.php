<?php
session_start();
session_destroy();
echo "<script>window.open('index.php?success=You have logout succesfully','_self')</script>";

?>