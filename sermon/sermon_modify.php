<?php
	$id = $_GET['id'];

	$sqldb = sqlite_open("../db/nvc.db") or die ("Could not connect!");

	$result = sqlite_query($sqldb, "select * from sermon where id=$id");

	list($id, $type, $title, $speaker, $date, $url) = sqlite_fetch_array($result);
?>

Modify Item

<form action="sermon_update.php?id=<? echo $id ?>" method="post">
<select name="type">
<option value="1" <? if ($type==1) echo 'selected'; ?> >Sunday</option>
<option value="2" <? if ($type==2) echo 'selected'; ?> >Wednesday</option>
<option value="3" <? if ($type==3) echo 'selected'; ?> >Special</option>
<option value="10"<? if ($type==10) echo 'selected'; ?> >other, please specify:</option>
</select>
<br />
<br />

Title:
<input type="text" name="title" value="<?php echo $title; ?>" />
<br />
Speaker:
<input type="text" name="speaker" value="<?php echo $speaker; ?>" />
<br />
Date:
<input type="text" name="date" value="<? echo $date; ?>" />
<br />
URL:
<input type="text" name="url" value="<? echo $url; ?>" />
<br />

<input type="submit" name="submit" value="Update" />

</form>
