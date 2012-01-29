<?php
	$type = $_GET['type'];

	$sqldb = sqlite_open("../db/nvc.db") or die ("Could not connect!");

	if ($type != null)
		$result = sqlite_query($sqldb, "select * from sermon where type=$type");
	else
		$result = sqlite_query($sqldb, "select * from sermon");

	echo "<nvc><items>";

	while (list($id, $type, $title, $speaker, $date, $url) = sqlite_fetch_array($result))
	{
		echo "<item>";
		echo "<type>$type</type>";
		echo "<title>$title</title>";
		echo "<speaker>$speaker</speaker>";
		echo "<date>$date</date>";
		echo "<url>$url</url>";
		echo "</item>";
	}

	echo "</items></nvc>";
	sqlite_close($sqldb); 
?>

