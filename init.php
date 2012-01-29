<?php
$dbhandle = sqlite_open('db/nvc.db', 0666, $error);
if (!$dbhandle) die ($error);

$stm = "CREATE TABLE sermon(Id integer PRIMARY KEY," . 
       "type integer, stitle text, speaker text, date text, url text)";
$ok = sqlite_exec($dbhandle, $stm, $error);

if (!$ok)
   die("Cannot execute query. $error");

echo "sermon table created successfully";
echo "<br/>";

$stm = "CREATE TABLE notice(Id integer PRIMARY KEY," .
       "ntitle text, content text)";
$ok = sqlite_exec($dbhandle, $stm, $error);

if (!$ok)
   die("Cannot execute query. $error");

echo "notice table created successfully";
echo "<br/>";

echo "Database nvc created successfully";
sqlite_close($dbhandle);
?>
