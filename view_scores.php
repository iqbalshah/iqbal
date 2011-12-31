<?php

include('database_access_param.php');


$db_link=mysql_connect($hostname, $dbuser, $dbpassword) or die("Unable to connect to the server!");

		mysql_select_db($dbname) or die("Unable to connect to the database.");


		$ssql="select * from scores where username='".$user."'";
		//echo $ssql."<br>";

		$sresult=mysql_query($ssql);

		print('<html>');
		print('<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Scores</title>');
		print('<link rel="stylesheet" href="style.css">');

		print('</head>');
		print('<body');




include('mainmenu.php');
print('<br><table width=50% align=center>');
print('<tr><th colspan=2>'.$user.'</th></tr>');
print('<tr><th>Score</th><th>Date Taken</th></tr>');

				if(mysql_numrows($sresult))
				{





				while($row = mysql_fetch_row($sresult))
				{

					$exist=1;

					$scoreid = $row[0];
					$username = $row[1];

					$score= $row[2];
					$acount = $row[3];
					$qcount = $row[4];
					$taken=$row[5];
					$qdate=$row[6];

					if($qdate!="")
					{
					$year=substr($qdate, 0,4);
					$month=substr($qdate, 5,2);
					$day=substr($qdate, 8,2);
					$qdate=$month."/".$day."/".$year;
						}







		print('<tr><td>'.$score.'</td><td>'.$qdate.'</td></tr>');

				}

				}
				else
				{
		print('<tr><th colspan=3>No Record Found!</th></tr>');


				}

print('</table>');




	?>