<?php
	// set values
	$id = $_GET['id'];

	$sqldb = sqlite_open("../db/nvc.db") or die ("Could not connect!");
	$queryStr = "delete from sermon where id=$id";
	sqlite_exec($sqldb, $queryStr);
	sqlite_close($sqldb); 

header('Location: sermon.php');
?>

