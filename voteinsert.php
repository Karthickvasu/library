<?php

$bid=$_POST['bid'];
$vote=$_POST['vote'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'admin';

$conn = mysql_connect($dbhost, $dbuser, $dbpass)or die('Could not connect: ' . mysql_error());
$sql = " update rank set vote=vote+'$vote',hitcount=hitcount+1 where bid='$bid'";

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
<title>Vote Success</title>
<br>
<br>
<h2 align="center" style=" color:#993333">SUCCESSFULLY REGISERED Your Vote! THANK YOU</h2>
</head>
<body bgcolor="#00CCCC">
<center>
<a href="vote.php">BACK</a>
</center>
</body>
</html>