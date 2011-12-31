<?php

#Autor Serge Skudaev 07/27/042004

include('database_access_param.php');




		if($password1 != $password2)
		{
		$message="Passwords do not match! Please try again";
		$boxaction="adduser";
		}
		else
		{




		$db_link=mysql_connect($hostname, $dbuser, $dbpassword) or die("Unable to connect to the server!");

		mysql_select_db($dbname) or die("Unable to connect to the database.");

		$sql="select * from students where username='".$username."'";

		$result=mysql_query($sql);

			if(mysql_numrows($result))
			{
			$message="The User name is in use. Please choose different user name!";
			$boxaction="adduser";
			}
			else
			{

			$sql="insert into students(stid, lastname, firstname, username, password,email, role)
					values
					(0, \"$lastname\",\"$firstname\",\"$username\", \"$password1\", \"$email\",\"$arole\")";

					if(!mysql_query($sql))
					{
					echo mysql_errno() . ": ";
					echo mysql_error() . "<BR>";
					}
					else{



					}

					 include('view_user_form.php');

		   }




	 }






<?php