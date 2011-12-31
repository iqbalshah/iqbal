<?php



include('adminauth.php');



#Autor Serge Skudaev 07/27/2004



?>



<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Update User</title>

<link rel="stylesheet" href="style.css">

<script language="JavaScript" src="form_validations.js"></script>

<script language="JavaScript" src="useru.js"></script>

</head>

<body>





<br><br>



		<?php



		include('mainmenu.php');



		print('<br>');







		?>







<br><br>



<form name="myform" method=post action="index2.php?boxaction=actupdateuser" onSubmit="return valForm()">

<table class="aaa" align=center width=300>

<tr><th colspan=2 align=center>Update User:</th></tr>

<tr>

	<td align=right>First Name</td><td><input type=text name=firstname value="<? echo $firstname; ?>"></td>

</tr>

<tr>

	<td align=right>Last Name</td><td><input type=text name=lastname value="<? echo $lastname; ?>"></td>

</tr>

<tr>

	<td align=right>Email</td><td><input type=text name=email value="<? echo $email; ?>"></td>

</tr>



<tr>

	<td align=right>User</td><td><input type=text name=username value="<? echo $username; ?>"></td>

</tr>



<tr>

	<td align=right>Password</td><td><input type=text name=password1 value="<? echo $password1; ?>"></td>

</tr>

<tr>

	<td align=right>Role</td><td><select name=arole size=1>



		<?



				if($arole =='super')

				{

				print('<option value="user">User</option>');

				print('<option value="admin">Admin</option>');

				print('<option value="super" selected>Super</option>');

				print('<option value="guest">Guest</option>');

				print('<option value="manager">Manager</option>');

				}

				elseif($arole =='user')

				{

				print('<option value="user" selected>User</option>');

				print('<option value="admin">Admin</option>');

				print('<option value="super">Super</option>');

				print('<option value="guest">Guest</option>');

				print('<option value="manager">Manager</option>');

				}

				elseif($arole =='admin')

				{

				print('<option value="user">User</option>');

				print('<option value="admin" selected>Admin</option>');

				print('<option value="super">Super</option>');

				print('<option value="guest">Guest</option>');

				print('<option value="manager">Manager</option>');

				}

				elseif($arole =='manager')

				{

				print('<option value="user">User</option>');

				print('<option value="admin" >Admin</option>');

				print('<option value="super">Super</option>');

				print('<option value="guest">Guest</option>');

				print('<option value="manager" selected>Manager</option>');

				}

				else

				{

				print('<option value="user">User</option>');

				print('<option value="admin">Admin</option>');

				print('<option value="super">Super</option>');

				print('<option value="guest" selected>Guest</option>');

				print('<option value="manager">Manager</option>');

				}

	?>





				</select>

	</td>

</tr>

<tr>

	<td align=right colspan=2>&nbsp;<input type=hidden name=stid value="<? echo $stid; ?>"</td>



</tr>



<tr>

<td align=center><input type=submit name=submit value="Update"></td><td align=center><input type=reset name=reset value="Clear"></td></tr>



<tr>

	<td align=right colspan=2>&nbsp;</td>



</tr>



</table>

</form>







</body>

</html>