<div id="top"></div>
<?php 
   	session_start();
  include('database_access_param.php');
  include('validate_fns.php');
  include('helper_fns.php');
  include('db_fns.php');
  include('utils_fns.php');

   $class =  find_class($_SESSION['csc_data']['class']);
   $subject = find_subject($_SESSION['csc_data']['subject']);
   $chapters = $_SESSION['chapter_selected']; // multi chapters

   $connection = mysql_connect($hostname, $dbuser, $dbpassword); //changet the configuration in required
	mysql_query("SET character_set_results=utf8", $connection);
	mb_language('uni');
	mb_internal_encoding('UTF-8');

	mysql_query("set names 'utf8'",$connection);

	if (!$connection) {
    	die('Could not connect: ' . mysql_error());
	}
	mysql_select_db($dbname, $connection);


	

print('<br><p align=center><font size=5><i>Online Quiz Manager</i></font><br><br><br>');


?> 

<table width="90%" border="0" cellpadding="5" cellspacing="0">
  <tr style="vertical-align: top">
    <td colspan="2" class="HeaderColor">
     <center><h1><u> 
	  <?php 
	  foreach($subject as $subjectInfo): 
      		 echo $subjectInfo['subject_name'];
	  endforeach;
      ?></u>
   <u>Class
   <?
      foreach($class as $classInfo): 
      		 echo $classInfo['class_name'];
	  endforeach;
	  
  ?></u> 
     </h1> </td>
  </tr>
</table>
<?php 


$chapters = $_SESSION['chapter_selected']; // multi chapters

$questions = $_SESSION['sq_selected']; // no of mcq questions of each chapter from $chapters

 if ( ! empty($chapters) ) // if some chapter(s) is selected
	$N = count($chapters); // count the no of chapter selected through check boxes
else
	$N = 0;	  // no chapter is selected

$all_qids = array();

foreach ($chapters as $chapter)
{

	$selected_total = $selected_total + $questions[$chapter];
	//echo "selected_total: " . $selected_total . " , "; 
	// sql having the chapter and no of questions
	$sql = "select * from questions where chap_id = $chapter and qtype='mcq'"; //"
	
	$result = mysql_query($sql) or die(mysql_error());

	$noq = mysql_num_rows($result); //num_of_questions

	$array_res = db_result_to_array($result);
	
	//echo count($array_res);
	shuffle($array_res);
	
	for($i=0; $i<$questions[$chapter];$i++)
	   {
	     		 $qid = $array_res[$i]['qid']; // get question id one by one	
				 //echo "<br />";
				 $all_qids[] = $qid;
				 
	   }
	   
	   
}


echo "Total Questions Selected: " .  count($all_qids); // total questions comprising the test

$attempted = 0;

echo " Attempted Questions : " . $attempted;

foreach ($all_qids as $qid)
    {
	   echo "<br />" . $qid;	  
	}

	
exit;


require("paging_class.php");





// create table //


$td=3;


$tr=4;





$paging=new paging(($td*$tr),5);


$paging->db("localhost","root","","exam");


$paging->query("select * from questions");





$page=$paging->print_info();


	echo "Data $page[start] - $page[end] of $page[total] [Total $page[total_pages] Pages]<hr>\n";





$table_tr=ceil(($page[total]-$page[start]+1)/$td);


if ($table_tr>$td) $table_tr=$tr;


$table_td=($page[total]-$page[start])+1;


if ($table_td>$td) $table_td=$td;





echo "<table border=\"1\">";


for ($i=1;$i<=$table_tr;$i++) {


	echo "<tr>";


		for ($j=1;$j<=$table_td;$j++) {


			$result=$paging->result_assoc();


			$color=$paging->print_color("yellow","#FFCCCC");


			$number=$paging->print_no();


				if ($number>$page[total]) {$number="&nbsp;";}


			echo "<td bgcolor=\"$color\">$number $result[MY_FIELD]</td>";


		}


	echo "</tr>\n";


}


echo "</table>";





echo "<hr>".$paging->print_link();








//echo $row['qid'];  echo $arr_table_result[2]['id'];


if($noq==0) {echo "No questions found in this chapter......<br> Thanks for visiting."; exit();}


else


echo  "<br>Total Questions: " . $noq . "<br><br><br>";





$cq = 0; // current question





		print('<html>');


		print('<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>');


		print('Quiz Manager</title>');


		print('<link rel="stylesheet" href="report.css">');



		print("</head>");


		/*


		print('<div id="container">


    		<p>The content goes here</p>


    <div id="footer-spacer"></div>   


	</div>');


	*/








		print('<body>');





  		


		print('<form name=myform method="post" action="index2.php?template=savegrade">');


		print('<table class="question" align=left width=100%>');


		


		print('<tr><th align=left colspan=2>Question:</th></tr>');


		


		print('<tr><td>&nbsp;</td></tr>');


		


if($cq<=$noq)


		{


		//for ($record=0; $record<$noq; record++){


		//print('<tr><td >'.$row[$cq]['qid'].'&nbsp;&nbsp;&nbsp;'.$row[$cq]['question'].'</td></tr>');


		print('<tr><td >'.$row[$cq]['question'].'</td></tr>');


		


	$answers[0]=$row[$cq]['ranswer'];


	$answers[1]=$row[$cq]['wanswer1'];


	$answers[2]=$row[$cq]['wanswer2'];


	$answers[3]=$row[$cq]['wanswer3'];


	


	$rightanswer = $answers[0] ;


	


shuffle($answers);





    $answer0=$answers[0] ;


    $answer1=$answers[1] ;


    $answer2=$answers[2] ;


    $answer3=$answers[3] ;








print('<tr><td><input type="radio" name=answer value="'.$answer0 .'">&nbsp;&nbsp;&nbsp;'.$answer0.'</td></tr>');





print('<tr><td><input type="radio" name=answer value="'.$answer1 .'">&nbsp;&nbsp;&nbsp;'.$answer1 .'</td></tr>');





print('<tr><td><input type="radio" name=answer value="'.$answer2 .'">&nbsp;&nbsp;&nbsp;'.$answer2 .'</td></tr>');





print('<tr><td><input type="radio" name=answer value="'.$answer3 .'">&nbsp;&nbsp;&nbsp;'.$answer3 .'</td></tr>');





print('<tr><td>&nbsp;<input type="hidden" name=rightanswer value="'.$rightanswer.'"><input type= hidden name=qnumber value="'.


$qnumber.'"></tr>');





   /*


	print('<tr><td colspan=2><input type=submit name=submit value="Submit" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=reset name=reset value="Clear" ></td></tr></table>');


	*/


print('<tr><td colspan=2><input type=submit name=submit value=" Submit " >


<input type=submit name=first value="   First  " > <input type=submit name=submit value="  Next  " >


<input type=submit name=prev value="Previous" > <input type=submit name=submit value="   Last   " >


</td></tr></table>');





	//print('<p>You cannot go back and resubmit an answer.&nbsp;System counts every submit and it affects your score</p>');





	}


	else


	{


	print('<input type =hidden name=score value="'.$score.'">');


	print('<tr><td colspan=2align=center><input type=submit name=submit value="Grade" ></td></tr></table>');


	print('</form>');





	}


/*


print('<div id="footer">');


    echo('The footer goes here');


print('</div>');


*/





	print('</body>');


	print('</html>');











?>


