<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


/* $server = "localhost";
 $username = "rounavza_roundtechsquare";
$password = "rounavza_roundtechsquare";
$dbname = "rounavza_roundtechsquare"; */

$server = "localhost";
$username = "root";
$password = "";
$dbname = "r2eee_website";

$con = new mysqli($server, $username, $password, $dbname);


// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
