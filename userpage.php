		<html>
		<head>
		<title>KSRCT Library</title>
			<link href="style.css" rel="stylesheet" type="text/css" />
			<link href="css/style.css" rel="stylesheet" type="text/css" />
		</head>

		<body>
		<form id="form1" name="form1" method="post" action="userpage1.php">
			<div id="topheader">
				<div class="topmenu_area">
   				</div>
				<div class="banner_textarea">
				</div>
			</div>
			<table align="center" width="1000" style="border:1px solid #d2d2d2;">
 				<tr>
 				<td style="border:1px solid skyblue;" width="250" align="left"><font class="paragraping2"><font color="#006633" size="+1">Browse By</font></font>				
 				<table align="center" width="250">
 					<form action="userpage1.php" method="post" name="f" onSubmit="return training();">
 					<tr>
 						<td width="293" height="34" class="paragraping2"><font color="#FF0000">Search by Book Type</font></td>
 					</tr>
 					<tr>
 						<td height="54"><input type="text" name="type" style="border:1px solid red;font-family:verdana;font-size:12px;width:200px;padding:5px 5px 5px 5px;"></td>
 					</tr>
  					<tr>
			 			<td height="42">
							&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 						<input type="submit" name="sub" value="Search" style="border:1px solid green;font-family:verdana;font-size:12px;padding:2px 2px 2px2px;"></td>
 					</tr>
 					</form>
 				</table>
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
							<tr>
		 						<td width="102"  class="paragraping2"> <?php echo $row['bid']; ?> </td>
								<td width="112"  class="paragraping2"><?php echo $row['bname']; ?> </td>
								<td width="140"  class="paragraping2"><?php echo $row['aname']; ?> </td>
								<td width="117"  class="paragraping2"><?php echo $row['type']; ?> </td>
								<td width="117"  class="paragraping2"><?php echo $row['vote']; ?> </td>
								<td width="117"  class="paragraping2"><?php echo $row['hitcount'];?></td>
							</tr>
							<?php
							} 
							mysql_close($conn);
							?>
						</table>
					</td>
				</tr>
			</table></td></tr></table></form>
		<center><a href="userlogin.php"  style="color:#00FFFF; font-size:18px">LOGOUT</a>
		<a href="vote.php"  style="color: #FF0000; font-size:18px">VOTE</a></center>
		</form>
		</body>
		</html>
	