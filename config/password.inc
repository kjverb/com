<?php
//TODO rename!!
$host = "localhost";
$login = "theverbe_katie";
$password = "k47i3v";
$databaseName = "theverbe_katie";

$mysqli = new mysqli($host, $login, $password, $databaseName);
//Check for errors, and only perform queries if there are none
if ( mysqli_connect_error() ) {
	die("Can't connect to database: " . $mysqli->error);
}