<?php
require "./BBDD.php";

@session_start();
session_destroy();
mensaje("Cerrando sesión.");
echo "<head><meta http-equiv='refresh' content='1; url=login.html'></head>";
?>