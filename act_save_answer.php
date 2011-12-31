<?php

#Copyright by Serge Skudaev, 2005

 include('auth.php');
include('database_access_param.php');
import_request_variables("pgc","");

//echo" act_save_answer.php<br>";



$exist=0;
$acount=0;
$qcount=0;
$score=0;
$taken=0;

$cday= date('d');
$cmonth= date('m');
$cyear= date('Y');


$dbcurrent_date=$cyear.'-'.$cmonth.'-'.$cday;



$db_link=mysql_connect($hostname, $dbuser, $dbpassword) or die("Unable to connect to the server!");

		mysql_select_db($dbname) or die("Unable to connect to the database.");


		$ssql="select * from scores where username='".$user."'";
	
		echo $ssql."<br>";

		$sresult=mysql_query($ssql);

				if(mysql_numrows($sresult))
				{
				$row = mysql_fetch_row($sresult);

					$exist=1;

					$scoreid = $row[0];
					$username = $row[1];

					$score= $row[2];
					$acount = $row[3];
					$qcount = $row[4];
					$taken=$row[5];


				}
				else
				{



	$isql="insert into scores(scoreid, username, score, acount, qcount, taken, qdate) values
			                         (0, '".$user."',".$score.",".$acount.",".$qcount.", ".$taken.", '".$dbcurrent_date."')";
	//echo $isql."<br>";

						if(!mysql_query($isql))
						{
						echo mysql_errno() . ": ";
						echo mysql_error() . "<BR>";
						}
				}



								if($taken != 1)
								{
								$qcount=$qcount+1;

								if($rightanswer == $answer)
								$acount=$acount + 1;
								$score=($acount/$qcount) * 100;  // (correct_answered / tot_questions) * 100


			$usql="update scores set score=".$score.", acount=".$acount.", qcount=".$qcount." , qdate='".$dbcurrent_date."' where username='".$user."'";

			//echo $usql."<br>";

						if(!mysql_query($usql))
						{
						echo mysql_errno() . ": ";
						echo mysql_error() . "<BR>";
						}




echo "<br>Student answer:&nbsp;".$answer."<br>";
echo "Right answer:&nbsp;".$rightanswer."<br>";





include('quiz.php');

								}
								else
								{
								echo "Sorry. You cannot take this quiz second time!";
								print('<a href="index2.php?boxaction=home">Home</a>');
								}


?>