<?php

$sname=$_POST['sname'];
$email=$_POST['email'];
$uname=$_POST['uname'];
$password=$_POST['pass'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'admin';

$conn = mysql_connect($dbhost, $dbuser, $dbpass)or die('Could not connect: ' . mysql_error());
$sql = "insert into user (sname,email,uname,password) values('$sname','$email','$uname','$password')";

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
<title>Registration Success</title>
<br>
<br>
<h2 align="center" style=" color:#993333"> REGISTRATION FORM SUCCESSFULLY REGISERED! THANK YOU</h2>
</head>
<body bgcolor="#00CCCC">
<center>
<a href="index.html">HOME</a>
</center>
</body>
</html>
