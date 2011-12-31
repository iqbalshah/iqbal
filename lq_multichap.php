<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>		
	body{font-family:Arial; font-size:13px;}
	h1, h2 {margin:3px; padding:0px;}
	h2{color:#00c;}
	div.title_description{font-style:italic; background:#eee; padding:3px; border:1px solid #777;}
	div.box{border:1px solid #777; border-top:0; background-color:#fff; padding:5px;}
	div.box .title{font-weight:bold;}
	div.box .description{display:inline; padding-left:5px; color: #555;}
	div.box .description:before{content: " # ";}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Quiz Management System</title>
</head>
<body class="sub">
<?php 

  session_start();
  include('config.php');
  include('validate_fns.php');
  include('helper_fns.php');
  include('db_fns.php');
  include('utils_fns.php');
  /* Generate a paper Code */
/*
	srand((float) microtime() * 10000000);
	$input = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
	$rand_keys = array_rand($input, 10);
	shuffle($rand_keys);
	$paper_code = $input[$rand_keys[0]] . $input[$rand_keys[1]] . $input[$rand_keys[2]] . $input[$rand_keys[3]];
	//echo $paper_code . "<br />";
*/
   $medium = $_SESSION['csc_data']['medium'];
   $class =  find_class($_SESSION['csc_data']['class']);
   $subject = find_subject($_SESSION['csc_data']['subject']);
   $chapters = $_SESSION['chapter_selected']; // multi chapters
   $short_questions = $_SESSION['sq_selected']; // no of short questions of each chapter from $chapters
   $test_type = $_SESSION['test_type']; // sq, mcq, etc
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
<div class='title_description'>
<div>
  <div>
    <div>
     <center><h1> 
	  <?php 
	  foreach($subject as $subjectInfo): 
      		 if($medium=='U') $Title = "<span dir='rtl'>" . $subjectInfo['subject_name'] . " برائے جماعت "; 
		 else $Title = "<span dir='ltr'>" . $subjectInfo['subject_name'] .  " for Class ";  
	  endforeach;
       
	  // echo ' Class ';
	   
      foreach($class as $classInfo): 
      		if($medium=='U') echo $Title . $classInfo['class_name_urdu'] . "</span>"; 
		else echo $Title . $classInfo['class_name_english'] . "</span>"; 
	  endforeach;
	 // echo "<br> Chapter: " ; // chapter no.
	  /*
	  foreach($chapter as $chapterInfo): 
      		 echo $chapterInfo['chap_no'] + "--"; // zero's are removed by converting the number to string using + ""			 
			   echo $chapterInfo['chap_name'];
	  endforeach;
	  */
	 // print "<h1> Paper Code: $paper_code";
	  print '</center>';
	 ?>
     </h1> </div>
  </div>
</div>
</div>
<?php 
//echo "<table  align='right' border='1'>";
foreach ($chapters as $chapter)
{
	//echo "chapter: $checked <br />";
	//echo "No. of sq: {$note[$checked]} <br />";
	$selected_total = $selected_total + $short_questions[$chapter];
	//echo "selected_total: " . $selected_total . " , "; 
	// sql having the chapter and no of questions
	$sql = "select question from questions where chap_id = $chapter and qtype='$test_type'"; //"
	//echo "questions:".$sql."<br>";
	$result = mysql_query($sql, $connection);
$all = mysql_fetch_all($result);
    $totq =  count($all);
//	echo "total questions in chapter $checked are $totq and selected questions are $note[$checked]<br />";
if($short_questions[$chapter] <=0 || $short_questions[$chapter]>$totq) $short_questions[$chapter] = $totq; // invalid no of selected qs : handling
//echo "Selected Questions: ". $noq . " out of " . $totq;
shuffle($all);
//echo "<table  align='right' border='1'>";
	if($medium=="U" ) 
			{
			//echo "Urdu"; 
			$question_number = "سوال نمبر";
			$alignement = 'right'; 
			/*
			$choice_a =  '(الف)';
			$choice_b = '(ب)';
			$choice_c = '(ج)';
			$choice_d = '(د)';
			*/
			}
		else 
			{
			//echo "English";
			$question_number = "Q.No.";
			$alignement = 'left'; 
			/*
			$choice_a =  '(a)';
			$choice_b = '(b)';
			$choice_c = '(c)';
			$choice_d = '(d)';
			*/
			}
//$selected_total;
	echo "<b>";
	echo '<font size="4">';
		for($i = 0; $i < $short_questions[$chapter] ; $i++) {
 	//echo "<tr>";
	echo "<p align=$alignement width='100'>" .  $question_number . ($count+1) . ":&nbsp;&nbsp;";
			//echo "<td align='right' width='100'>" .  "سوال نمبر " . ($count+1) . "</td></b>";
			echo $all[$i]['question']."</p>";
//			echo "<td align='right' width='100'>" .  "سوال نمبر " . ($count+1) . "</td></b>";
		//echo "</tr>";
		++$count;
	}
		$count = $selected_total;
//echo "</table>";
} // foreach $box
//echo "</table>";
} // $N
else // no chapter is selected yet
	{
		echo("You didn't select any chapter.");
	}
echo "</font></b>";

//$sql = "select question from questions where chap_id = $chapterId and qtype='sq' order by qnfb"; //"
////echo "questions:".$sql."<br>";
//$result=mysql_query($sql);
//	//include('utils_fns.php');
//$all = mysql_fetch_all($result);
////echo "Total Questions " . count($all);
//    $totq =  count($all);
//    if($noq <=0 || $noq>$totq) $noq = $totq; // invalid no of selected qs : handling
////echo "Selected Questions: ". $noq . " out of " . $totq;
//shuffle($all);
//echo "<div class='title_description'> Press F5 or Reload/Refresh the page to get a new set of questions.</div>";
//// display the test / questions
//print '<h2><p align="right"><br>' . "[مختصر سوالات کے جوابات تحریر کریں  [" . $noq * 2 . ' =  2 * ' . $noq  ;
//print '</h2>';
//echo "<table  align='right' border='1'>";
//		for($i = 0; $i < $noq ; $i++) {
// 	echo "<tr>";
//			echo "<b><td align='right' width='500'>" .$all[$i]['question']."</td>";
//			echo "<td align='right' width='100'>" .  "سوال نمبر " . ($i+1) . "</td></b>";
//		echo "</tr>";

//	}
//echo "</table>";

?>
</body>
</html>