<?php
$logger_path = $_SERVER['DOCUMENT_ROOT']."/_includes/logger.php";
include_once($logger_path);

$log->info("Initializing MySQL client");
 $mysqli = new mysqli ("10.10.102.130","dev","Corona07","people") or 
die(mysql_error ()); 
$log->trace ("Connected successfully."); ?>


