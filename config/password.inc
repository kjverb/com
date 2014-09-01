<?php
$host = "localhost";
$login = "root";
$password = "b@115@x";
$databaseName = "portfolio";

$mysqli = new mysqli($host, $login, $password, $databaseName);
//Check for errors, and only perform queries if there are none
if ( mysqli_connect_error() ) {
	die("Can't connect to database: " . $mysqli->error);
}
