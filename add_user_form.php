<?php



include('adminauth.php');

include('database_access_param.php');

#Autor Serge Skudaev 07/27/2004



?>



<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Add User</title>

<link rel="stylesheet" href="style.css">

<script language="JavaScript" src="form_validations.js"></script>

<script language="JavaScript" src="user.js"></script>





</head>

<body>





<br><br>





		<? include('mainmenu.php');

		print('<br>');





		?>



<br><br>











<form method=post name=myform action="index2.php?boxaction=actadduser" onSubmit="return valForm()">

<table class="ccc" align=center width=300>

<tr><th colspan=2 align=center>Enter User:</th></tr>

<tr>

	<td align=right>First Name</td><td><input type=text name=firstname size=10></td>

</tr>

<tr>

	<td align=right>Last Name</td><td><input type=text name=lastname size=10></td>

</tr>

<tr>

	<td align=right>Email</td><td><input type=text name=email size=30></td>

</tr>



<tr>

	<td align=right>User</td><td><input type=text name=username size=10></td>

</tr>



<tr>

	<td align=right>Password</td><td><input type=password name=password1 size=10>

	</td>

</tr>

<tr>

	<td align=right>Password</td><td><input type=password name=password2 size=10>

	</td>

</tr>

<tr>

	<td align=right>Role</td><td><select name=arole size=1>

						<option value="user" selected>User</option>

						<option value="admin">Admin</option>

						</select>

	</td>

</tr>

<tr>

	<td align=center colspan=2><input type=submit name=submit value="Save">&nbsp;&nbsp;&nbsp;&nbsp;<input type=reset name=reset value="Clear">

	</td>

</tr>

</table>

</form>

</body>

</html>