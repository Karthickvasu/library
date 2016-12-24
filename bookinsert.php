<?php

$bid=$_POST['bid'];
$bname=$_POST['bname'];
$aname=$_POST['aname'];
$type=$_POST['type'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'admin';

$conn = mysql_connect($dbhost, $dbuser, $dbpass)or die('Could not connect: ' . mysql_error());
$sql = "insert into rank(bid,bname,aname,type,vote,hitcount)values('$bid','$bname','$aname','$type',0,0)";

mysql_select_db('php');
$retval = mysql_query( $sql, $conn );
if(!$retval )
{
  die('Could not get data: ' . mysql_error());
}
mysql_close($conn);
?>

<html>
<head>
<title>Successfully Inserted</title>
<br>
<br>
<h2 align="center" style="color:#993333"> Inserted Successfully</h2>
</head>
<body bgcolor="#666699">
<center>
<a href="addbook.php">BACK</a>
</center>
</body>
</html>