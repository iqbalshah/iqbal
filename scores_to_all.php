<?php

		include('adminauth.php');

		include('database_access_param.php');


		print('<html>');
		print('<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>');
		print('Quiz 1</title>');
		print('<link rel="stylesheet" href="report.css">');

		print("</head>");
		print('<body><br><br>');
		print('<form name=myform method="post" action="index2.php?boxaction=savegrade">');
		print('<table class="report" align=left width=70% border=1>');
		print('<th colspan=4><Font Size=3>Student Scores Report</font></th></tr>');
		//print('<th colspan=4>&nbsp;</th></tr>');
		print('<th colspan=4>&nbsp;</th></tr>');
		print('<tr><th width=25% align=left>First Name</th><th width=25% align=left>Last Name</th><th width=25% align=left>Score</th><th width=25% align=left>Date</th></tr>');
		print('<tr><td colspan=4>&nbsp;</td></tr>');


					$db_link=mysql_connect($hostname, $dbuser, $dbpassword) or die("Unable to connect to the server!");

							mysql_select_db($dbname) or die("Unable to connect to the database.");




$sql="SELECT s.firstname, s.lastname, c.score, c.qdate from students s, scores c where s.username=c.username";


			$result=mysql_query($sql);

			if(mysql_numrows($result))
			{



							while($row = mysql_fetch_row($result))
							{
							$firstname=$row[0];
							$lastname=$row[1];
							$score=$row[2];
							$qdate=$row[3];


							if($qdate !="")
							{
							$year=substr($qdate, 0,4);
							$month=substr($qdate, 5,2);
							$day=substr($qdate, 8,2);
							$qdate=$month."/".$day."/".$year;
							}





			print('<tr><td width=25%>'.$firstname.'</td><td width=25%>'.$lastname.'</td><td width=25%>'.$score.'</td><td width=25%>'.$qdate.'</td></tr>');


							}



			}



	print('</form>');
	print('</body>');
	print('</html>');








?>