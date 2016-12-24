<html>
<head>
	<title>KSRCT Library</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="deletebook1.php">
<div id="topheader">
	<div class="topmenu_area">
   	</div>
	<div class="banner_textarea">
	</div>
</div>
	<table align="center" width="868" style="border:1px solid #d2d2d2;">
 	<tr>
   	<td width="860" valign="top"> 
		<table align="center" width="100%">
		<tr bgcolor="#910000">
			<td class="paragraping2" width="30%"  style="color:white;">Book ID</td>
			<td class="paragraping2" width="30%" style="color:white;">Book Name</td>
			<td class="paragraping2" width="30%" style="color:white;">Book Author</td>
			<td class="paragraping2" width="30%" style="color:white;">Book Type</td>
			<td class="paragraping2"  width="30%"style="color:white;">Delete</td>
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
		<td width="16%"><input type="checkbox" name="checkbox" value="<%=rs1.getString(8)%>"></td> 
		</tr>
		<?php
		} 

mysql_close($conn);
?>
		
	</table>
	</td>
	</tr>
	<tr>
		<td colspan="10" align="center">
		<input type="submit" style="border:1px solid green;font-family:verdana;font-size:12px;padding:2px 2px 2px 2px;" value="Delete" name="B1"></td>				</tr>
	</table>
	<center><a href="adminpage.php"  style="color:#00FFFF; font-size:18px">BACK </a></center>
	</body>
	</html>