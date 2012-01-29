<?php
	$type = $_GET['type'];

	$sqldb = sqlite_open("../db/nvc.db") or die ("Could not connect!");

	if ($type != null)
		$result = sqlite_query($sqldb, "select * from sermon where type=$type");
	else
		$result = sqlite_query($sqldb, "select * from sermon");

	echo "<html><body><table>";
        echo "<tr><td colspan='7'><h1>Sermon List</h1></td></tr>";

        echo "<tr>";
        echo "<td>Type</td>";
        echo "<td>Title</td>";
        echo "<td>Speaker</td>";
        echo "<td>Date</td>";
        echo "<td>Url</td>";
        echo "<td>Modify</td>";
        echo "<td>Delete</td>";
        echo "</tr>";

	while (list($id, $type, $title, $speaker, $date, $url) = sqlite_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>$type</td>";
		echo "<td>$title</td>";
		echo "<td>$speaker</td>";
		echo "<td>$date</td>";
		echo "<td>$url</td>";
		echo "<td><button onclick='gotoPage(1, $id)''>Modify</button></td>";
		echo "<td><button onclick='gotoPage(2, $id)'>Delete</button></td>";
		echo "</tr>";
	}

	echo "</table></body></html>";
	sqlite_close($sqldb); 
?>
<script language="JavaScript">
function gotoPage(type, id)
{
	switch(type)
	{
		case 1:
			window.location="sermon_modify.php?id=" + id;
		break;
		case 2:
			window.location="sermon_delete.php?id=" + id;
		break;
	}
}
</script>
<link rel="stylesheet" type="text/css" href="../style.css" media="screen" />

<br />
<br />

<form action="sermon_insert.php" method="post">
<table>
<tr><td colspan=2>
<h1>Add New Item</h1>
</td></tr>

<tr>
<td>Select Serive Type</td>
<td>
<select name="type">
<option value="0" <? if ($type == 0) echo 'selected'; ?>>Select Service Type</option>
<option value="1" <? if ($type == 1) echo 'selected'; ?>>Sunday</option>
<option value="2">Wednesday</option>
<option value="3">Special</option>
<option value="10">other, please specify:</option>
</select>
</td>
</tr>

<tr><td>Title</td>
<td>
<input type="text" name="title" size="100"/>
</td></tr>

<tr><td>Speaker</td>
<td>
<input type="text" name="speaker" size="100"/>
</td></tr>

<tr><td>Date</td>
<td>
<input type="text" name="date" size="100"/>
</td></tr>

<tr><td>URL</td>
<td>
<input type="text" name="url" size="100"/>
</td></tr>
<tr></tr>
<tr><td colspan=2>
<input type="submit" name="submit" value="Add" size="30"/>
</td></tr>
</table>

</form>

