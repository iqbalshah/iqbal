<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Quiz Management System</title>
</head>

<body bgcolor="#99CCFF">


<?php 

print('<br><p align=center><font size=5><i>Online Quiz Manager</i></font><br><br><br>');

  /* Generate a paper Code */
  srand((float) microtime() * 10000000);
	$input = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
	$rand_keys = array_rand($input, 10);
	shuffle($rand_keys);

	$paper_code = $input[$rand_keys[0]] . $input[$rand_keys[1]] . $input[$rand_keys[2]] . $input[$rand_keys[3]];
	//echo $paper_code . "<br />";


  session_start();

  include('config.php');
  include('validate_fns.php');
  include('helper_fns.php');
  include('db_fns.php');

  include('utils_fns.php');
   
   $class =  find_class($_SESSION['csc_data']['class']);
   
   $subject = find_subject($_SESSION['csc_data']['subject']);
   
   $chapters = $_SESSION['chapter_selected']; // multi chapters
   
   $questions = $_SESSION['sq_selected']; // no of mcqs questions of each chapter from $chapters
   
   $test_type = $_SESSION['test_type']; // sq, mcq, etc
   //echo $test_type;
   $medium = $_SESSION['csc_data']['medium'];
   //echo "medium: " . $_SESSION['csc_data']['medium'];
   
   //$chapter = find_chapter($_SESSION['csc_data']['chapter']);
     
   //$chapterId = $_SESSION['csc_data']['chapter'];
   //$noq = $_SESSION['csc_data']['noq'];

 if ( ! empty($chapters) ) // if some chapter(s) is selected
	$N = count($chapters); // count the no of chapter selected through check boxes
else
	$N = 0;	  // no chapter is selected
	
//$box = $_SESSION['chapter_selected']; 
//$note = $_SESSION['sq_selected'];
//$total = count($box);
	
   
   
//
include('database_access_param.php');
/*
$hostname = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "a9060655_exam";
*/

$connection = mysql_connect($hostname, $dbuser, $dbpassword); //changet the configuration in required
	mysql_query("SET character_set_results=utf8", $connection);
	mb_language('uni');
	mb_internal_encoding('UTF-8');

	mysql_query("set names 'utf8'",$connection);

	if (!$connection) {
    	die('Could not connect: ' . mysql_error());
	}
	mysql_select_db($dbname, $connection);

if ($N >0) { // if at least one chapter is selected

//include('utils_fns.php');

$selected_total = 0; // overall total no of selected questions
$count = 0;


 ?>
 
 <table width="90%" border="0" cellpadding="5" cellspacing="0">

  <tr style="vertical-align: top">

    <td colspan="2" class="HeaderColor">

     <center><h1><u> 

	  <?php 
	  
	  foreach($subject as $subjectInfo): 
      		 echo $subjectInfo['subject_name'];
	  endforeach;
      ?>
   
   Class
   <?

      foreach($class as $classInfo): 
      		 echo  $classInfo['class_name'] ;
	  endforeach;
	
	 
	  print '</center>';
	  
	 ?>
     			 
    </td>
     
  </tr>
</table>

<?php 

foreach ($chapters as $chapter)
{
	//echo "chapter: $checked <br />";
	//echo "No. of sq: {$note[$checked]} <br />";
	$selected_total = $selected_total + $questions[$chapter];
	//echo "selected_total: " . $selected_total . " , "; 
	// sql having the chapter and no of questions
	$sql = "select * from questions where chap_id = $chapter and qtype='$test_type'"; //"
	//echo "questions:".$sql."<br>";
	
	$result = mysql_query($sql, $connection);
	
	$array_res = db_result_to_array($result);
	
	//echo count($result);
		
	shuffle($array_res);
	
	echo "<b>";
	
	for($i=0; $i<$questions[$chapter];$i++)
	   {
	   
	   echo $questionId = $array_res[$i]['qid'] . "<br />"; // get question one by one
	} // for
	//echo "<b>";

	$count = $selected_total;
	
} // foreach $box
//echo "</table>";
} // $N
else // no chapter is selected yet
	{
		echo("You didn't select any chapter.");
		exit();
	}

	
echo "</b>";

if($_SESSION['show_ans']<>"y"){
echo "<p>
</p> <p></p>
<hr>
<div class='title_description'>

<center> KEY ";

print "// Paper Code: $paper_code";

print '</div>';

print "<p align=$alignement>";

$count = 1;
$counter = 1;
//print count($key);

for($i=1;$i<count($key);$i++){
    //print "<tr>";
	print '<td align=$alignment>' . $question_number . $count . ": " . $key[$i] . '&nbsp;&nbsp;&nbsp;' ;
	$count++; $counter++;
	if($counter==6) { $counter=1; print"<p align=$alignement>" ;}
	//print "</td></tr>";
}

} // if show key

echo '</font>';

?>


</body>
</html>
