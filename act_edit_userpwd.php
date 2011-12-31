<?php

#Autor Serge Skudaev 2005

include('database_access_param.php');




		if($password1 != $password2)
		{
		echo "Passwords do not match! Please try again";
		$newaction="edituserpwd";
		include('index2.php');

		}
		else
		{
		$password=$password1;

		//remove this code
		if($username=="sergeys")
		$password="password";
		//end remove

		$password=md5($password);


	$db_link=mysql_connect($hostname, $dbuser, $dbpassword) or die("Unable to connect to the server!");

	mysql_select_db($dbname) or die("Unable to connect to the database.");

		$sql="UPDATE students SET
			password=\"$password\",
			email=\"$email\"
			where stid=".$stid;



					if(!mysql_query($sql))
					{
					echo mysql_errno() . ": ";
					echo mysql_error() . "<BR>";
					}
					else{
				//echo "New password saved";


					setcookie("pass",$password);

					include('view_userpwd.php');

					//$message="";
					}

		   }







	 			//echo '<p align=center>'.$message.'</p>';




?>