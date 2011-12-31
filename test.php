<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OQM</title>
</head>
<body>
<?
	if( !isset($_SESSION) )
	    session_start();
if(isset($_SESSION['csc_data'])) // Class Subject Chapter data
	{
	//echo "un setting the session data";
	unset($_SESSION['csc_data']);	//	
	$_SESSION['csc_data']=array();
	}
else
{
	echo "declaration: the session data";
	$_SESSION['csc_data']=array();
}

// initialization the session data

if ( ! empty($_POST['class']) )

	$_SESSION['csc_data']['class'] = $_POST['class'];

else

	$_SESSION['csc_data']['class'] = "0";

//echo "Class Id: " . $_SESSION['csc_data']['class'] . " <br> ";



if ( ! empty($_POST['subject']) )

	{

	  include_once('db_fns.php');

	  include_once('database_access_param.php');

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

    //

	$_SESSION['csc_data']['subject'] = $_POST['subject'];

	$subject_id = $_POST['subject'];

	$query="SELECT subject_medium FROM subjects WHERE subject_id='$subject_id'";

	$result=mysql_query($query);

	$row = mysql_fetch_array($result);



$_SESSION['csc_data']['medium'] = $row['subject_medium'];
//$_SESSION['csc_data']['subject'] = $row['subject_medium'];

//echo "medium in test.php: " .$row['subject_medium'];

	}

else

	{

	$_SESSION['csc_data']['subject'] = "0";

	$_SESSION['csc_data']['medium'] = $row['subject_medium'];

	}

//echo "subject Id: " . $_SESSION['csc_data']['subject'] . " <br> ";



//$_SESSION['csc_data']['chapter'] = $_POST['chapter'];

	//echo "chapter Id: " . $_SESSION['csc_data']['chapter'] . " <br> ";

if ( ! empty($_POST['chap_selected']) )

	$_SESSION['chapter_selected'] = $_POST['chap_selected'];

else

	$_SESSION['chapter_selected'] = "0";

//echo "chaps_selected: " . $_SESSION['chapter_selected'];

		

if ( ! empty($_POST['sq_selected']) )

	$_SESSION['sq_selected'] = $_POST['sq_selected'];

else

	$_SESSION['sq_selected'] = "0"	;

//echo "sq_selected: " . $_SESSION['sq_selected'];



//$_SESSION['test_type'] = $_POST['testtype'];

	//echo "Test Type: " . $_SESSION['testtype'] .  "<br />";

//$test_type = "mcq"; // mcq, sq, etc

//$_SESSION['test_type'] = $test_type;



/*

echo "<pre>";

 	print_r($_SESSION);

echo "</pre>";

*/



/*

print <<<Ejaz

contents here 

Ejaz;

*/if(! empty($_POST['show_ans']))    $_SESSION['show_ans'] = y; else     $_SESSION['show_ans'] = n; 		

if ( ! empty($_POST['test_type']) )

	$_SESSION['test_type'] = $_POST['test_type'];

else

	$_SESSION['test_type'] = "mcq";

	

$test_type = $_SESSION['test_type'];



$class =  find_class($_SESSION['csc_data']['class']);

$_SESSION['csc_data']['class_name_urdu'] = $class[0]['class_name_urdu'];
$_SESSION['csc_data']['class_name_english'] = $class[0]['class_name_english'];


$subject = find_subject($_SESSION['csc_data']['subject']); // accepts the subject id and returns subject name 

$_SESSION['csc_data']['subject_name'] = $subject[0][0];


$chapters = $_SESSION['chapter_selected']; // multi chapters
$short_questions = $_SESSION['sq_selected']; // no of short questions of each chapter from $chapters
$test_type = $_SESSION['test_type']; // sq, mcq, etc
   
    if ( ! empty($chapters) ) // if some chapter(s) is selected
		$N = count($chapters); // count the no of chapter selected through check boxes
	else
		$N = 0;	  // no chapter is selected

if ($N >0) { // if at least one chapter is selected
//include('utils_fns.php');
$selected_total = 0; // overall total no of selected questions
$count = 0;

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
	
	$params = array();
	
	for($i=0; $i<$short_questions[$chapter];$i++)
	   {
	   //echo $array_res[$i]['question'] . "<br />";
	   $question = $array_res[$i]['question']; // get question one by one
	   $_SESSION['csc_data']['Data'][$count]['question'] = $question;
	   //$qid = $array_res[$i]['question']; // get question one by one
	   // and its four options
	    $answers[0]=$array_res[$i]['ranswer'];
		$_SESSION['csc_data']['Data'][$count]['ranswer'] = $answers[0];
				
		$answers[1]=$array_res[$i]['wanswer1'];
		$_SESSION['csc_data']['Data'][$count]['wanswer1'] = $answers[1];
		
		$answers[2]=$array_res[$i]['wanswer2'];
		$_SESSION['csc_data']['Data'][$count]['wanswer2'] = $answers[2];
		
		$answers[3]=$array_res[$i]['wanswer3'];
		$_SESSION['csc_data']['Data'][$count]['wanswer3'] = $answers[3];
		
		$secondlast = $array_res[$i]['secondlast'];
		$_SESSION['csc_data']['Data'][$count]['secondlast'] = $secondlast;
		
		$lastoption = $array_res[$i]['lastoption'];
		$_SESSION['csc_data']['Data'][$count]['lastoption'] = $lastoption;

		$qid=$array_res[$i]['qid'];
		$_SESSION['csc_data']['Data'][$count]['qid'] = $qid;
		

		$rightanswer=$array_res[$i]['ranswer'];
		$key[] = $rightanswer;


    ++$count;                       
	} // for
	
	echo "<br />";

	$count = $selected_total;
	
} // foreach $box
//echo "</table>";
} // $N
else // no chapter is selected yet
	{
		echo("You didn't select any chapter.");
		exit();
	}

$_SESSION['csc_data']['t_question'] = $count;


//print_r($_SESSION['csc_data']);
  //exit; 
   

if (isset($_POST['submit'])){

switch ($test_type) {
    case "sq":
        header("Location: sq_multichap.php"); // send this cookies data to quiz.php to start the quiz
        break;

    case "mcq":
        	header("Location: mcq_multichap.php"); // send this cookies data to quiz.php to start the quiz
			//echo "mcq selected";
        break;

    case "lq":
       	header("Location: lq_multichap.php"); // send this cookies data to quiz.php to start the quiz
        break;

    case "nm":
       	header("Location: nm_multichap.php"); // send this cookies data to quiz.php to start the quiz
        break;
	default:
		echo "neither mcq nor sq selected"	;			
} // switch
} // if submit
else if (isset($_POST['quiz'])){
    header("Location: exam.php");
}
/*
elseif (isset($_POST['quiz'])) { 
   header("Location: quiz1.php"); // send this cookies data to quiz.php to start the quiz
}
*/

?>
</body>
</html>