<?php

$bname=$_POST['bname'];
$aname=$_POST['aname'];
$type=$_POST['type'];
$bid=$_POST['bid'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'admin';
$conn = mysql_connect($dbhost, $dbuser, $dbpass)or die('Could not connect: ' . mysql_error());

$sql = "UPDATE rank SET  bname='$bname',aname='$aname',type='$type' where bid='$bid'";
mysql_select_db('php');
$retval = mysql_query( $sql, $conn );
if(!$retval )
{
  die('Could not get data: ' . mysql_error());
}
?>
<html>
<head>
<title>KSRCT Library</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="check.php">
<div id="topheader">
	<div class="topmenu_area">
   	</div>
	<div class="banner_textarea">
	</div>
</div>
<div align="center" style="font-size:18px; font-family:Verdana, Arial, Helvetica, sans-serif; color:#000099">Updated Successfully </div>
	<table align="center" width="868" style="border:1px solid #d2d2d2;">
 	<tr>
   	<td width="860" valign="top"> 
		<table align="center" width="100%">
		<tr bgcolor="#910000">
			<td class="paragraping2" width="30%"  style="color:white;">Book ID</td>
			<td class="paragraping2" width="30%" style="color:white;">Book Name</td>
			<td class="paragraping2" width="30%" style="color:white;">Book Author</td>
			<td class="paragraping2" width="30%" style="color:white;">Book Type</td>
		</tr>
		
		<?php
		$dbhost = 'localhost:3306';
		$dbuser = 'root';
		$dbpass = 'admin';
		$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		if(! $conn )
		{
  				die('Could not connect: ' . mysql_error());
		}
		$sql ='SELECT bid,bname,aname,type FROM book';
		mysql_select_db('php');
		$retval = mysql_query( $sql, $conn );

		if(! $retval )
		{
  			die('Could not get data: ' . mysql_error());
		}
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{    
		?>
		<td width="102"  class="paragraping2"> <?php echo $row['bid']; ?> </td>
		<td width="112"  class="paragraping2"><?php echo $row['bname']; ?> </td>
		<td width="140"  class="paragraping2"><?php echo $row['aname']; ?> </td>
		<td width="117"  class="paragraping2"><?php echo $row['type']; ?> </td>
		</tr>
		<?php
		} 

mysql_close($conn);
?>
		
	</table>
	</td>
	</tr>
	</table>
	<center><a href="adminpage.php"  style=" color:#CC0000; font-size:18px">BACK </a></center>
	</body>
	</html>
