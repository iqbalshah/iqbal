<?php



#Autor Serge Skudaev 07/27/2004
include('database_access_param.php');


include('auth.php');

	$username=$_REQUEST['user'];
	$password=$_REQUEST['pass'];


	// Connect to MySQL

    mysql_connect( $hostname, $dbuser, $dbpassword)
        or die ( 'Unable to connect to server. (login)' );

    // Select database on MySQL server

    mysql_select_db($dbname )
        or die ( 'Unable to select database.(login)' );


    // Formulate the query

    $sql = "SELECT * FROM students WHERE
            username = '$username' AND
            password = '$password'";


		$result=mysql_query($sql) or die ('Unable execute the query');

		if(mysql_numrows($result))
		{
		$row = mysql_fetch_row($result);

		$stid=$row[0];
		$lastname=$row[1];
		$firstname=$row[2];
		$username=$row[3];

		$password=$row[4];
		$email=$row[5];
		$role=$row[6];

		}





?>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Change Your Password</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
<br><br>
<? include('mainmenu.php'); ?>

<br><br>

<form method=post action="index2.php?boxaction=actedituserpwd">
<table class="aaa" align=center width=300>
<tr><th colspan=2 align=center>Change Your Password</th></tr>
<tr>
	<td align=right>First Name:</td><td><? echo $firstname; ?></td>
</tr>
<tr>
	<td align=right>Last Name:</td><td><? echo $lastname; ?></td>
</tr>
<tr>
	<td align=right>Email:</td><td><input type=text name=email size=30 value="<? echo $email; ?>"></td>
</tr>

<tr>
	<td align=right>User:</td><td><? echo $username; ?></td>
</tr>

<tr>
	<td align=right>New Password:</td><td><input type=password name=password1 size=10>
	</td>
</tr>
<tr>
	<td align=right>Confirm New:</td><td><input type=password name=password2 size=10>
	</td>
</tr>
<tr>
	<td align=right>Role:</td><td><? echo $role; ?>
	</td>
</tr>
<tr>
	<td>
	<input type=hidden name=firstname value="<? echo $firstname; ?>">
	</td>
	<td>
	<input type=hidden name=lastname value="<? echo $lastname; ?>">
	</td>
</tr>
<tr>
	<td>
	<input type=hidden name=username value="<? echo $username; ?>">
	</td>
	<td>
	<input type=hidden name=role value="<? echo $role; ?>"><input type=hidden name=stid value="<? echo $stid; ?>">
	</td>
</tr>
<tr>
	<td align=center colspan=2><input type=submit name=submit value="Save">&nbsp&nbsp&nbsp&nbsp<input type=reset name=reset value="Clear">
	</td>
</tr>
</table>
</form>
</body>
</html>