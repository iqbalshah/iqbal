<?php
/*!
 * **************************************************************
 ****************  ProQuiz V2 ******************************
 ***************************************************************/
 /* documentation at: http://proquiz.softon.org/documentation/
 /* Designed & Maintained by
 /*                                    - Softon Technologies
 /* Developer
 /*                                    - Manzovi
 /* For Support Contact @
 /*                                    - proquiz@softon.org
 /* Release Date : 02 Feb 2011
 /* Licensed under GPL license:
 /* http://www.gnu.org/licenses/gpl.html
 */
?>

<?php 

// Begin Session if not present
if(!isset($_SESSION)){
    session_start();
}

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
	   $qid = $array_res[$i]['qid']; // get question one by one
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
			$question_number = "???? ???? ";
			$alignement = right; 	
/*
            $choice_a = "<span dir='rtl'>(a)</span>";
			$choice_b = "<span dir='rtl'>(b)</span>";
			$choice_c = "<span dir='rtl'>(c)</span>";
			$choice_d = "<span dir='rtl'>(d)</span>";		
*/			
			}
		else 
			{
			//echo "English";
			$question_number = "Q.No. ";
			$alignement = left; 
/*
            $choice_a = "<span dir='ltr'>(a)</span>";
			$choice_b = "<span dir='ltr'>(b)</span>";
			$choice_c = "<span dir='ltr'>(c)</span>";
			$choice_d = "<span dir='ltr'>(d)</span>";
*/
			}
function getMCQ($value,$key){

        $qstn_opt = explode("|",$value['options']);
        $tot_opt = count($qstn_opt);


?>
<div class="pq_opt_hld"> 
<div class="pq_opt_col1"> 
        <?php for($i=0;$i<4; $i=$i+2){echo $qid; ?>
            <div id="<?php echo ($key).'_'.$i; ?>" class="pq_opt">
             <input  type="radio" name="<?php echo $qid; ?>" value="<?php echo $answers[$i]; ?>" />
                <?php echo $answers[$i]; ?>				
            </div><!-- end .pq_opt -->
        
		<?php } ?>
        </div><!-- end .pq_opt_col1 -->
        
        <div class="pq_opt_col2"> 
        <?php for($i=1;$i<4; $i=$i+2){echo $qid;?>
            <div id="<?php echo ($key).'_'.$i; ?>" class="pq_opt">
                <input  type="radio" name="<?php echo $qid; ?>" value="<?php echo $answers[$i]; ?>" />
                <?php echo $answers[$i]; ?>
		
            </div><!-- end .pq_opt -->
        <?php } ?>
        </div><!-- end .pq_opt_col2 -->
        
</div><!-- end .pq_opt_hld -->								

<!-- end .pq_question_hld-->
</div> <!-- end .pq_container -->
<div style="clear: both;"></div>
<?php
}
?>

<div class="pq_qno" style="text-align:<?php echo $alignement; ?>"><?php echo "$question_number" . ($count+1) . ": ";  ?></div> <!-- end .pq_qno -->
<div class="pq_question_hld">
 <div class="pq_qtn" style="text-align:<?=$alignement;?>"><?php echo $question. '<br />'; ?></div>
 
 