<?php

#Copyright by Serge Skudaev, 2005

 include('adminauth.php');
 include('database_access_param.php');


$db_link=mysql_connect($hostname, $dbuser, $dbpassword) or die("Unable to connect to the server!");

		mysql_select_db($dbname) or die("Unable to connect to the database.");



$dsql="delete from scores where username='".$username."'";



						if(!mysql_query($dsql))
						{
								echo mysql_errno() . ": ";
								echo mysql_error() . "<BR>";
						}
						else
						{
						echo "Exam reset!";
						}

					$newaction="home";
					include('index2.php');
?>