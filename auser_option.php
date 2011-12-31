<?php



#Author Serge Skudaev 2004



include('adminauth.php');


print("<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /><title>User options</title>");

print('<link rel="stylesheet" href="style.css">');


print("</head><body><br>");

include('mainmenu.php');

print("<br>");

print("<br>");

echo "<p align=center><a href=\"index2.php?boxaction=adduser\">|&nbsp;&nbsp;Add User&nbsp;&nbsp;|</a>";

echo "<a href=\"index2.php?&boxaction=viewusers\">&nbsp;&nbsp;View User&nbsp;&nbsp;|</a>";

?>

<br><br>

<form method=post action="index2.php?boxaction=actsearchuser">

<table class="ccc" align=center width=300>

<tr><th colspan=2 align=center>Search User:</th></tr>

<tr>

	<td align=right>First Name</td><td><input type=text name=firstname></td>

</tr>

<tr>

	<td align=right>Last Name</td><td><input type=text name=lastname ></td>

</tr>

<tr>

	<td align=right colspan=2>&nbsp;</td>





<tr>

<td align=right><input type=submit name=submit value="Search"></td><td align=center><input type=reset name=reset value="Clear"></td></tr>



<tr>

	<td align=right colspan=2>&nbsp;</td>



</tr>



</table>

</form>

</body>

</html>







