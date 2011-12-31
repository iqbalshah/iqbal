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
   
   $class =  find_class($_SESSION['csc_data']['class']);
   $subject = find_subject($_SESSION['csc_data']['subject']);
   $chapter = find_chapter($_SESSION['csc_data']['chapter']);
     
   $chapterId = $_SESSION['csc_data']['chapter'];
   $noq = $_SESSION['csc_data']['noq'];
   
   
   
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


 ?>
 
<div class='title_description'>
 
<table width="90%" border="0" cellpadding="5" cellspacing="0">
  <tr style="vertical-align: top">
    <td colspan="2">
     <center><h1> 
	  <?php 
	  
	  foreach($subject as $subjectInfo): 
      		 echo $subjectInfo['subject_name'];
	  endforeach;
      ?>
   
   Class
   <?

      foreach($class as $classInfo): 
      		 echo  $classInfo['class_name'];
	  endforeach;
	  //
	  echo "<br> Chapter: " ; // chapter no.
	  
	  foreach($chapter as $chapterInfo): 
      		 echo $chapterInfo['chap_no'] + "--"; // zero's are removed by converting the number to string using + ""			 
			   echo $chapterInfo['chap_name'];
	  endforeach;
	  print '</center>';
	  
	 ?>
     			 
     </h1> </td>
     
  </tr>
</table>
</div>
<?php 


$sql = "select question from questions where chap_id = $chapterId and qtype='sq' order by qnfb"; //"

//echo "questions:".$sql."<br>";

$result=mysql_query($sql);
	//include('utils_fns.php');
$all = mysql_fetch_all($result);

//echo "Total Questions " . count($all);

    $totq =  count($all);

   

    if($noq <=0 || $noq>$totq) $noq = $totq; // invalid no of selected qs : handling

//echo "Selected Questions: ". $noq . " out of " . $totq;
   

shuffle($all);

echo "<div class='title_description'> Press F5 or Reload/Refresh the page to get a new set of questions.</div>";


// display the test / questions

print '<h2><p align="right"><br>' . "[مختصر سوالات کے جوابات تحریر کریں  [" . $noq * 2 . ' =  2 * ' . $noq  ;

print '</h2>';



echo "<table  align='right' border='1'>";
	
		for($i = 0; $i < $noq ; $i++) {

 	echo "<tr>";
			echo "<b><td align='right' width='500'>" .$all[$i]['question']."</td>";
			echo "<td align='right' width='100'>" .  "سوال نمبر " . ($i+1) . "</td></b>";
		echo "</tr>";


	}



echo "</table>";

?>



</body>
</html>
