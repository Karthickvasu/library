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
	?>	<html>
		<head>
			<title>KSRCT Library</title>
			<link href="style.css" rel="stylesheet" type="text/css" />
			<link href="css/style.css" rel="stylesheet" type="text/css" />
		</head>

		<body>
		<form action="userlogin.php" method="post">
		<div id="topheader">
			<div class="topmenu_area"></div>
			<div class="banner_textarea"></div>
		</div>
		<div align="center"  style="color:#000099; font-size:16px; text-shadow:#00FF99">WELCOME    
		<?php 
		$dbhost = 'localhost:3306';
		$dbuser = 'root';
		$dbpass = 'admin';
		$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		if(! $conn )
		{
 			 die('Could not connect: ' . mysql_error());
		}
		$sql ="SELECT sname FROM user where uname='$uname1'";

		mysql_select_db('php');
		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
  			die('Could not get data: ' . mysql_error());
		}
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
    		 echo    $row['sname'];
		} 
		mysql_close($conn);
		?>
		<table align="center" width="868" style="border:1px solid #d2d2d2;">
 		<tr>
   			<td width="860" valign="top"> 
				<table align="center" width="100%">
					<tr bgcolor="#910000">
						<td class="paragraping2" width="10%"  style="color:white;">Book ID</td>
						<td class="paragraping2" width="20%" style="color:white;">Book Name</td>
						<td class="paragraping2" width="20%" style="color:white;">Book Author</td>
						<td class="paragraping2" width="10%" style="color:white;">Book Type</td>
						<td class="paragraping2" width="20%" style="color:white;">Rating(Out of 10)</td>
						<td class="paragraping2" width="20%" style="color:white;">Hit Count</td>
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
					$sql ='SELECT bid,bname,aname,type,(vote/hitcount) as vote,hitcount FROM rank';
					mysql_select_db('php');
					$retval = mysql_query( $sql, $conn );
					
					if(! $retval )
					{
  							die('Could not get data: ' . mysql_error());
					}
					while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
					{    
					?>
					<tr>    <td width="102"  class="paragraping2"> <?php echo $row['bid']; ?> </td>
							<td width="112"  class="paragraping2"><?php echo $row['bname']; ?> </td>
							<td width="140"  class="paragraping2"><?php echo $row['aname']; ?> </td>
							<td width="117"  class="paragraping2"><?php echo $row['type']; ?> </td>
							<td width="117"  class="paragraping2"><?php echo $row['vote']; ?> </td>
							<td width="117"  class="paragraping2"><?php echo $row['hitcount']; ?> </td>
					</tr>
				
					<?php
					}
					mysql_close($conn);
					?>
				</table>
				</td>
			</tr>
		</table>
		<center>
		<a href="userlogin.php"  style="color:#00FFFF; font-size:18px">BACK </a>
		<a href="userpage.php"  style="color: #CC3300; font-size:18px">SEACH</a>
		<a href="vote.php"  style="color: #CCCC00; font-size:18px">VOTE</a>
		</center>
		</div>
		</form>
</body>
</html>
		<?php
	}
else
	{
		header("Location:userlogin.php");
		//echo "Invalid Username or Password";
		
	}
?>

