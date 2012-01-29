<?php
	// set values
	$id = $_GET['id'];
	$title = $_POST['title'];
	$speaker = $_POST['speaker'];;
	$date = $_POST['date'];
	$url = $_POST['url'];
	$type = $_POST['type'];

	$sqldb = sqlite_open("../db/nvc.db") or die ("Could not connect!");
	$queryStr = "update sermon set stitle='$title', speaker='$speaker', date='$date', url='$url', type='$type' where id=$id";
	sqlite_exec($sqldb, $queryStr);
	sqlite_close($sqldb); 

header('Location: sermon.php');
?>

