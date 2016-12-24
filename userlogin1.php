<?php
$uname1=$_POST['uname'];
$password1=$_POST['pass'];
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'admin';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql ="SELECT * FROM user where uname='$uname1' AND password='$password1'";

mysql_select_db('php');
$retval = mysql_query( $sql, $conn );

if(! $retval )
{
  die('Could Not Fetch Data' . mysql_error());
}
$row=mysql_fetch_array($retval);
	
	if($row['password']== $password1)
	{
		header("Location:userpage0.php");
	}
	else
	{
		
		header("Location:userlogin.php");
		echo "Invalid Username or Password";
		
	}
mysql_close($conn);
?>