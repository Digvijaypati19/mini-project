<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = mysql_connect($servername, $username, $password);
mysql_select_db ("ans",$conn) or die (mysql_error());
?>