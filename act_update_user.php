<?php

#Autor Serge Skudaev 2005

include('database_access_param.php');

	$user=$_REQUEST['user'];
	$pass=$_REQUEST['pass'];

	$user=$_REQUEST['stid'];




		$db_link=mysql_connect($hostname, $dbuser, $dbpassword) or die("Unable to connect to the server!");

		mysql_select_db($dbname) or die("Unable to connect to the database.");



$password=md5($password1);



			$usql="Update students SET
lastname='".$lastname."', firstname='".$firstname."', username='". $username."', password='".$password."', email='".$email."', role='".$arole."' where stid=".$stid;

			//echo $usql;

					if(!mysql_query($usql))
					{
					echo mysql_errno() . ": ";
					echo mysql_error() . "<BR>";
					}
					else{
					$message="User Updated";
					$message="";

					if($user==$username)
					{
					//echo "user:".$user." = username:".$username;

					setcookie("pass",$password1);
					setcookie("role",$arole);
					}


					include('view_user_updated.php');


					}










	 			echo '<p align=center>'.$message.'</p>';



?>