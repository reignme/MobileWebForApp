<?php
	// set values
	$title = $_POST['title'];
	$speaker = $_POST['speaker'];;
	$date = $_POST['date'];
	$url = $_POST['url'];
	$type = $_POST['type'];

	$sqldb = sqlite_open("../db/nvc.db") or die ("Could not connect!");

	$queryStr = "insert into sermon values(NULL, '$type', '$title', '$speaker', '$date', '$url')";
	sqlite_exec($sqldb, $queryStr);
	sqlite_close($sqldb); 

header('Location: sermon.php');

?>

