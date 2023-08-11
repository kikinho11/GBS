<?php

/* Development Password (CHANGE THIS ON PRODUCTION) */ 
$serverName = "127.0.0.1";
$dBUsername = "root";
$dBPassword = "";
$dBName = "gbs_website";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName, 3306);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}

?>