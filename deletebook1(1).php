<?php

$bid=$_POST['bid'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'admin';

$conn = mysql_connect($dbhost, $dbuser, $dbpass)or die('Could not connect: ' . mysql_error());
$sql = "DELETE FROM book WHERE bid='$bid'";

mysql_select_db('php');
$retval = mysql_query( $sql, $conn );
if(!$retval )
{
  die('Could not get data: ' . mysql_error());
}
if($row['bid']== $password1)
	{
?>
<html>
<head>
<title>Successfully Deleted</title>
<br>
<br>
<h2 align="center" style=" color:#CC0000"> Deleted Book Successfully</h2>
</head>
<body bgcolor="#FFFF00">
<center>
<a href="adminpage.php">BACK</a>
</center>
</body>
</html>
<?php 
mysql_close($conn);
?>

