<?php







#Author Serge Skudaev, 2005



include('adminauth.php');

include('database_access_param.php');





	$sql="select * from students order by lastname";





	$db_link = mysql_connect($hostname, $dbuser, $dbpassword) or die ('Unable to connect to the server.');



				mysql_select_db($dbname) or die ("Unable to connect to db");



				$result=mysql_query($sql) or die ('Unable execute the query');



				if(mysql_numrows($result))

				{





	print('<html>');

	print('<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>');

	print('View Users</title>');

	print('<link rel="stylesheet" href="style.css">');



	print("</head>");

	print('<body>');



	print("<br><br>");

				 include('mainmenu.php');

	print("<br>");





	print('<br><br>');

	print('<table class="aaa" align=center width=70%>');

	print('<tr><td colspan=9 align=center>The User Table</td></tr>');

	print('<tr>');



print('<th>N</th><th>First Name:</th><th>Last Name:</th><th>User:</th><th>Password:</th><th>Email:</th><th>Role:</th><th>Delete:</th><th>Edit:</th><th>Reset Exam</th></tr>');







					while($row = mysql_fetch_row($result))

					{

						$stid=$row[0];

						$lastname=$row[1];

						$firstname=$row[2];

						$username=$row[3];



						$password=$row[4];

						$email=$row[5];

						$arole=$row[6];















						print('<tr>');

						echo'<td>'.$stid.'</td><td>'.$firstname.'</td><td>'.$lastname.'</td><td>'.$username.'</td><td>'.$password.'</td><td>'.$email.'</td><td>'.$arole.'</td><td align=center><a href="index2.php?arole='.$arole.'&stid='.$stid.'&boxaction=deleteuser">Delete</a></td><td align=center><a href="index2.php?password1='.$password.'&email='.$email.'&stid='.$stid.'&username='.$username.'&firstname='.$firstname.'&lastname='.$lastname.'&arole='.$arole.'&boxaction=edituser">Edit</a></td><td align=center><a href="index2.php?username='.$username.'&boxaction=resetexam">ResetExam</a></td></tr>';



					}



			print('</table>');





			print('</body></html>');





			}else{

			print("No record found");

			}

?>














