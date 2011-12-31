<?php

include('auth.php');

#Autor Serge Skudaev 07/27/2004

include('database_access_param.php');


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

		$newpassword=$row[4];
		$email=$row[5];
		$role=$row[6];

		}




?>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>View Your Password</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
<br><br>
<?php

include('mainmenu.php');

$ln=strlen($password);

$p=substr($password,0,1);
$ep=substr($password, $ln-1, 1);




?>

<br><br>


<table class="aaa" align=center width=300>
<tr><th colspan=2 align=center>View Your Password</th></tr>

<tr>
	<td align=right>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr>
	<td align=right>First Name:</td><td><? echo $firstname; ?></td>
</tr>
<tr>
	<td align=right>Last Name:</td><td><? echo $lastname; ?></td>
</tr>
<tr>
	<td align=right>Email:</td><td><? echo $email; ?></td>
</tr>

<tr>
	<td align=right>User:</td><td><? echo $username; ?></td>
</tr>

<tr>
	<td align=right>Password:</td><td><? echo $p.'-'.$ep; ?>
	</td>
</tr>

<tr>
	<td align=right>Role:</td><td><? echo $role; ?>
	</td>
</tr>
<tr>
	<td align=right>&nbsp;</td><td>&nbsp;</td>
</tr>
</table>
</form>
</body>
</html>