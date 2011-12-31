<?php



include('adminauth.php');



#Autor Serge Skudaev 07/27/2004



?>



<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>View User Updated</title>

<link rel="stylesheet" href="style.css">



</head>

<body>





<br><br>



		<?php



		include('mainmenu.php');

		print('<br>');



		?>







<br><br>





<table class="aaa" align=center width=300>

<tr><th colspan=2 align=center>View User Updated:</th></tr>

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

	<td align=right>Role</td><td><input type=text name=arole value="<? echo $arole; ?>"></td>

</tr>

<tr>

	<td align=right colspan=2>&nbsp;<input type=hidden name=stid value="<? echo $stid; ?>"</td>



</tr>





	<td align=right colspan=2>&nbsp;</td>



</tr>



</table>



</body>

</html>