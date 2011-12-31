<?php

#Copyright by Serge Skudaev, 2005

 include('auth.php');
include('database_access_param.php');
$cday= date('d');
$cmonth= date('m');
$cyear= date('Y');


$dbcurrent_date=$cyear.'-'.$cmonth.'-'.$cday;


$db_link=mysql_connect($hostname, $dbuser, $dbpassword) or die("Unable to connect to the server!");

		mysql_select_db($dbname) or die("Unable to connect to the database.");

$taken=1;
//echo "quizid=".$quizid;

		$usql="update scores set taken=".$taken.", qdate='".$dbcurrent_date."' where username='".$user."'";

	//echo $usql."<br>";

		if(!mysql_query($usql))
		{
		echo mysql_errno() . ": ";
		echo mysql_error() . "<BR>";
		}


		print('<html>');
		print('<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title></title>');
		print('<link rel="stylesheet" href="style.css">');

		print('</head>');
		print('<body');

		include('mainmenu.php');


if($score !=100)
{
$score=substr($score, 0, 2);
//echo "score=".$score."<br>";
       
//if score < 70 it is not saved in the database.
       
			if($score < 70)
			{
		/*
			$dsql="delete from scores where username='".$user."'";
						if(!mysql_query($dsql))
								{
								echo mysql_errno() . ": ";
								echo mysql_error() . "<BR>";
						}
        */

		print('<br>');
		print('<p align=center>');
		Print("<h3 align=center>Your score for quiz =".$score." %</h3>");
		//print('<p align=center>Please try again</p>');
		print('</p>');

			}
			else
			{
			print('<br>');
			print('<p align=center>');
			Print("<h3 align=center>Congratulation!&nbsp;Your score:&nbsp;".$score." %</h3>");
			print('</p>');
			}
        
}
else
{
		print('<br>');
		print('<p align=center>');
		Print("<h3 align=center>Congratulation!&nbspYour score:&nbsp".$score." %</h3>");
		print('</p>');


}


?>