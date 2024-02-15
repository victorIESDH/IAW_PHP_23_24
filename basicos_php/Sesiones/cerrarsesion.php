<?php
session_start();
session_destroy();
header("location:login.php");
exit();
//echo "<head><meta http-equiv='refresh' content='1; url=login.php'></head>";
?>