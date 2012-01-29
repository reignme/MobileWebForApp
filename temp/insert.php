<html>
<title>NVC Mobile</title>
<body>

<form action="insert_sermon_do.php" method="post">
<select name="type">
<option value="0" selected>Select Service Type</option>
<option value="1">Sunday</option>
<option value="2">Wednesday</option>
<option value="3">Special</option>
<option value="10">other, please specify:</option>
</select>
<br />
<br />

Title:
<input type="text" name="title" />
<br />
Speaker: 
<input type="text" name="speaker" />
<br />
Date: 
<input type="text" name="date" />
<br />
URL:
<input type="text" name="url" />
<br />

<input type="submit" name="submit" value="Save" />

</form>

<br/>
<br/>

<form action="insert_notice_do.php" method="post">
Notice Title:<br/>
<input type="text" name="ntitle" />
<br/>
<textarea rows="10" cols="60" name="content" id="content">
</textarea>
<br/>
<input type="submit" name="submit" value="Save" />
</form>
</body>
</html>

