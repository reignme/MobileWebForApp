<?php
	// set values
	$ntitle = $_POST['ntitle'];
	$content = $_POST['content'];;

	$sqldb = sqlite_open("db/nvc.db") or die ("Could not connect!");

	$queryStr = "insert into notice values(NULL, '$ntitle', '$content')";
	sqlite_exec($sqldb, $queryStr);
	sqlite_close($sqldb); 

	header('Location: http://m.newvisionchurch.org/mobile/notice.php');

?>

