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

	srand((float) microtime() * 10000000);
	$input = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
	$rand_keys = array_rand($input, 10);
	shuffle($rand_keys);
	$paper_code = $input[$rand_keys[0]] . $input[$rand_keys[1]] . $input[$rand_keys[2]] . $input[$rand_keys[3]];
	//echo $paper_code . "<br />";

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
    <div><center><h1><?php 
	  
	  /*
	  $UrduTitle = "<span dir='rtl'>";
	  
	  $EnglishTitle = "<span dir='ltr'>";
	  */
	  
	  foreach($subject as $subjectInfo): 
      		 if($medium=='U') $Title = "<span dir='rtl'>" . $subjectInfo['subject_name'] . " برائے جماعت "; 
			 else $Title = "<span dir='ltr'>" . $subjectInfo['subject_name'] .  " for Class ";  
	  endforeach;
	 
	 //echo $UrduTitle = $UrduTitle . $subjectInfo['subject_name'];
	 
      foreach($class as $classInfo): 
      		 if($medium=='U') echo $Title . $classInfo['class_name_urdu'] . "</span>"; 
			 else echo $Title . $classInfo['class_name_english'] . "</span>"; 
	  endforeach;
	  
	/*  
	echo "Chapter(s)";
  
      foreach($chapters as $chapter)
      		 echo  $chapter['chap_no'] . ":";
	  endforeach;
	
	exit;
	*/   
		
	  //
	 
	if($_SESSION['show_ans']<>"y") print "<br/ >PaperCode: $paper_code"; // do not show paper code
	 
	  print '</center>';
	  
	 ?></div>
     
  </div>
</div>
</div>
<?php 
//echo "<table  align='right' border='1'>";

// to save the answers for generating the key at the end of the paper
$key[] = "";

foreach ($chapters as $chapter)
{
	//echo "chapter: $checked <br />";
	//echo "No. of sq: {$note[$checked]} <br />";
	$selected_total = $selected_total + $short_questions[$chapter];
	//echo "selected_total: " . $selected_total . " , "; 
	// sql having the chapter and no of questions
	$sql = "select * from questions where chap_id = $chapter and qtype='$test_type'"; //"
	//echo "questions:".$sql."<br>";
	
	$result = mysql_query($sql, $connection);
	
	$array_res = db_result_to_array($result);
	
	//echo count($array_res);
	shuffle($array_res);
	
	echo "<b>";
	
	for($i=0; $i<$short_questions[$chapter];$i++)
	   {
	   //echo $array_res[$i]['question'] . "<br />";
	   $question = $array_res[$i]['question']; // get question one by one
	   // and its four options
	        $answers[0]=$array_res[$i]['ranswer'];
		$answers[1]=$array_res[$i]['wanswer1'];
		$answers[2]=$array_res[$i]['wanswer2'];
		$answers[3]=$array_res[$i]['wanswer3'];
		
		$secondlast = $array_res[$i]['secondlast'];
		$lastoption = $array_res[$i]['lastoption'];
		

		$qnumber=$array_res[$i]['qid'];

		$rightanswer=$array_res[$i]['ranswer'];
		$key[] = $rightanswer;
		
		if($medium=="U" ) 
			{
			//echo "Urdu"; 
			$question_number = "سوال نمبر ";
			$alignement = 'right'; 	

            $choice_a = "<span dir='rtl'>(a)</span>";
			$choice_b = "<span dir='rtl'>(b)</span>";
			$choice_c = "<span dir='rtl'>(c)</span>";
			$choice_d = "<span dir='rtl'>(d)</span>";		
			}
		else 
			{
			//echo "English";
			$question_number = "Q.No. ";
			$alignement = 'left'; 

            $choice_a = "<span dir='ltr'>(a)</span>";
			$choice_b = "<span dir='ltr'>(b)</span>";
			$choice_c = "<span dir='ltr'>(c)</span>";
			$choice_d = "<span dir='ltr'>(d)</span>";

			}
			
				
	if($_SESSION['show_ans']=="y") echo '<font size="5">';
        else   echo '<font size="4">';

		print "<p align=$alignement width='100'>" .  $question_number . ($count+1) . ": ";
				print $question . '<br />';
				
				++$count;
				
				shuffle($answers); // shuffle the four options of this mcq
			    
				if($secondlast<>"##"){ //echo "last option: " . $lastoption;

				//echo "last option is " . $lastoption; 
				
					if($secondlast==$answers[0])
						{
						// interchange first and fourth option
						$temp = $answers[2];
						$answers[2] = $answers[0] ;
						$answers[0] = $temp;
						}
					if($secondlast==$answers[1])	
					    {
						// interchange second and fourth option
						$temp = $answers[2];
						$answers[2] = $answers[1] ;
						$answers[1] = $temp;
                        } 	

					if($secondlast==$answers[3])	
					    {
						// interchange third and fourth option
						$temp = $answers[3];
						$answers[3] = $answers[2] ;
						$answers[2] = $temp;
                        } 	
						
				} // if not equal to ##
				
				if($lastoption<>"##"){ //echo "last option: " . $lastoption;

				//echo "last option is " . $lastoption; 
				
					if($lastoption==$answers[0])
						{
						// interchange first and fourth option
						$temp = $answers[3];
						$answers[3] = $answers[0] ;
						$answers[0] = $temp;
						}
					if($lastoption==$answers[1])	
					    {
						// interchange second and fourth option
						$temp = $answers[3];
						$answers[3] = $answers[1] ;
						$answers[1] = $temp;
                                             } 	

					if($lastoption==$answers[2])	
					    {
						// interchange third and fourth option
						$temp = $answers[3];
						$answers[3] = $answers[2] ;
						$answers[2] = $temp;
                                            } 	
						
				} // if not equal to ##
				
					    $answer0=$answers[0] ;
					    $answer1=$answers[1] ;
					    $answer2=$answers[2] ;
					    $answer3=$answers[3] ;
				
				 if($_SESSION['show_ans']=="y")
                                 {
                                if($rightanswer== $answer0) $color = "blue"; else $color="black";
                                      print("<font color=$color><strong>" . $choice_a. "&nbsp;" . $answer0 . '&nbsp;&nbsp;&nbsp;' . "</font>");                                
                                if($rightanswer== $answer1)  $color = "blue"; else $color="black";
				     print("<font color=$color>" . $choice_b . "&nbsp;" . $answer1 . '&nbsp;&nbsp;&nbsp;' . "</font>");
                                if($rightanswer== $answer2) $color = "blue"; else $color="black";
				    print("<font color=$color>" . $choice_c . "&nbsp;" . $answer2 . '&nbsp;&nbsp;&nbsp;' . "</font>");
                                if($rightanswer== $answer3) $color = "blue"; else $color="black";
				    print("<font color=$color>" . $choice_d .  "&nbsp;" . $answer3 . '&nbsp;&nbsp;&nbsp;</strong>' . "</font>");
                                } // show ans
                          
                                
                                 else // hide ans
                                {
                                $color="black";                                 
                                print("<font color=$color><strong>" . $choice_a. "&nbsp;" . $answer0 . '&nbsp;&nbsp;&nbsp;');                                                              
				print($choice_b . "&nbsp;" . $answer1 . '&nbsp;&nbsp;&nbsp;');                             
				print($choice_c . "&nbsp;" . $answer2 . '&nbsp;&nbsp;&nbsp;');                               
				print($choice_d .  "&nbsp;" . $answer3 . '&nbsp;&nbsp;&nbsp;</strong>' . "</font>");
	                        }
                              
                           
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
