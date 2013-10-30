<?php
include 'dbConn.php';
$query = "INSERT INTO person (first_name, last_name) VALUES ('$_POST[fname]', '$_POST[lname]')";
$mysqli->query($query);
header('Location:listPeople.php');
?>