<?php
?>
<html>
<head>
<title>Registration Form</title>
<br>
<br>
<h1 align="center" style=" color:#993333"> REGISTRATION FORM <h1>
<link rel="stylesheet" href="style1.css" type="text/css" />
</head>
<body bgcolor="#00CCCC">
<center>
<div id="login-form">
<form method="post" action="insert.php">
<table align="center" width="30%" border="0">
<p align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#FF6600">Enter Your Details </p>
<tr>
<td><input type="text" name="sname" placeholder=" Student Name" required /></td>
</tr>

<tr>
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>

<tr>
<td><input type="text" name="uname" placeholder="Desired User Name" required /></td>
</tr>

<tr>
<td height="38"><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>

<tr>
<td><button type="submit" name="btn-signup">Sign Up</button></td>
</tr>
<tr>
<td><a href="index.html" style="color:#FF0000">HOME</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>