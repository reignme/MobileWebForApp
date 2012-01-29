<?php
	$sqldb = sqlite_open("db/nvc.db") or die ("Could not connect!");

	$result = sqlite_query($sqldb, "select * from notice");

	echo "<nvc><items>";

	while (list($id, $ntitle, $content) = sqlite_fetch_array($result))
	{
		echo "<item>";
		echo "<ntitle>$ntitle</ntitle>";
		echo "<content>$content</content>";
		echo "</item>";
	}

	echo "</items></nvc>";
	sqlite_close($sqldb); 
?>

