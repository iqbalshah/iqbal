<?php



#Author Serge Skudaev 2002



#echo "act_delete_user.php"



include('database_access_param.php');



	$db_link=mysql_connect($hostname, $dbuser, $dbpassword) or die ("Unable to connect to the server!");



		if($arole !="admin")

		{

		$sql="delete from students where stid=".$stid;



			if(!mysql_db_query($dbname, $sql, $db_link))

			{

			echo mysql_errno() . ": ";

			echo mysql_error() . "<BR>";

			}

			else

			{

			echo "<p align=center>User deleted</p>";

			//echo '<a href="index2.php?&boxaction=viewusers">Go Back</a>';





			$newaction="viewusers";

			include('index2.php');









			}

		}

		else

		{

			$asql="select stid from students where role='admin'";



			mysql_select_db($dbname) or die ("Unable to select database.");

			$aresult=mysql_query($asql) or die ("Unable to execute query.");



			$num=mysql_numrows($aresult);



			if($num < 2)

			{

			echo "<p align=center>You cannot delete the last administrator<br>";

			echo "<br><br><b>Please Create a new admin user, then delete this one.</b></p>";



			$newaction='adduser';

			include('index2.php');



			//echo '<a href="index2.php?&boxaction=addser">Add User</a>';

			}

			else

			{

					$sql="delete from students where stid=".$stid;



								if(!mysql_db_query($dbname, $sql, $db_link))

								{

								echo mysql_errno() . ": ";

								echo mysql_error() . "<BR>";

								}

								else

								{

								echo "<p align=center>Admin User deleted</p>";

								//echo '<a href="index2.php?&boxaction=viewusers">Go Back</a>';



								$newaction='viewusers';

								include('index2.php');



								}



			}

	}







?>