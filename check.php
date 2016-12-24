<?php
$admin=$_POST['t1'];
$password=$_POST['t2'];
if($admin=="admin" && $password=="admin")
{
 header("location:adminpage.php");
}
else
{
?>
	<html>
	<head>
		<script> alert("Invalid Username and Password");</script>
	</head>
	</html>
	<?php
		header("location:adminlogin1.php");
	}
?>