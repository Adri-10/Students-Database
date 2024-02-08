<?php
$server= "localhost";
$username= "root";
$pass = "";
$database = "project";
$conn = mysqli_connect($server, $username, $pass, $database);
if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
?>
