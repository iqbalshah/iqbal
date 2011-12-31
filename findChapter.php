<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Quiz Management System</title>
<!--//---------------------------------+
//  Developed by Roshan Bhattarai    |
//	http://roshanbh.com.np           |
//  Contact for custom scripts       |
//  or implementation help.          |
//  email-nepaliboy007@yahoo.com     |
//---------------------------------+-->
<?
session_start();
//$test_type = 'sq' ;//$_SESSION['test_type'];
#### Roshan's Ajax dropdown code with php
#### Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
### if you have any problem contact me at http://roshanbh.com.np
#### fell free to visit my blog http://php-ajax-guru.blogspot.com
//$class_id=intval($_GET['class']);
//$subject_id=intval($_GET['subject']);
//echo $subject_id;
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
$subject_id=intval($_GET['subject']);
$test_type = $_GET['testtype'];//'sq/mcq/mcsq' ;

$query="SELECT subject_medium FROM subjects WHERE subject_id='$subject_id'";
	$result=mysql_query($query);
	$row = mysql_fetch_array($result);
//echo $row['subject_medium'];

$_SESSION['medium'] = $row['subject_medium'];

if($_SESSION['medium']=="U" ) {$alignement = 'right'; $direction = 'rtl';} 	
else {$alignement = 'left'; $direction = 'ltr';} 	
$query="SELECT * FROM chapters WHERE subject_id='$subject_id' order by 'chap_no' ASC";
$result=mysql_query($query);
$result1 = mysql_query($query);
//echo $result;
print '<td></td>';

if($test_type=='sq') $totq = "Short Questions";

elseif($test_type=='mcq') $totq = "MCQ";

elseif($test_type=='lq') $totq = "Long Questions";

elseif($test_type=='nm') $totq = "Numericals";

else $totq = "mcsq";



print '<table border="1">';



print '<tr>';



	print '<th bgcolor="#ccddff"> Select </th>';



	print '<th align="center" bgcolor="#ccddff">Chapter</th>';



	//print '<th align="center" bgcolor="#ccddff"> Chapter Name </th>';



	if($totq <> "mcsq"){

	print '<th align="center" bgcolor="#ccddff">Total '. $totq;



	print '<th align="center" bgcolor="#ccddff"> ' . $totq . ' Selected </th>';

    }

	else{

	print '<th align="center" bgcolor="#ccddff">Total MCQ';



	print '<th align="center" bgcolor="#ccddff"> MCQ Selected </th>';

	print '<th align="center" bgcolor="#ccddff">Total SQ';



	print '<th align="center" bgcolor="#ccddff"> SQ Selected </th>';

	}





print '</tr>';



//$chapCounter = false;





if($totq <> "mcsq"){ // either mcq or sq selected



while ($row=mysql_fetch_array($result1))



{



    $chap_id=intval($row['chap_id']); // get the chapter id of the chapters found one by one to get questions of this chapter



	$query="SELECT qid FROM questions WHERE chap_id='$chap_id' and qtype='$test_type'";



	//echo $query;



	$result=mysql_query($query);



	//echo $result;



	$noq = mysql_num_rows($result);



// do not show i.e skip the chapter which has no questions



	if ($noq == 0) continue; 



	//else $chapCounter = true;



	$color = '#DEDB89';



	



// register,store and display the chapter having some questions	



	print "<tr bgcolor=$color><td align='center'><input type='checkbox' name='chap_selected[]' value='$chap_id'</td>";  	



//  display the chapter number 



	//print '<td align="center">' . $row['chap_no'] . '</td>'; 



//  display the chapter name



	print "<td align=$alignement><span dir=$direction>" . $row['chap_no'] . ': ' .$row['chap_name'] . "</span></td>"; 



//  display this chapter's total questions in the database



	print '<td align="center">' . $noq . '</td>'; 



	print '<td align="center">';



	//print "<input name='sq_selected[$chap_id]' type='text' value='5' size='5' maxlength='5' align='center' /></td>";



	print "<select name='sq_selected[$chap_id]'>";



	for($i=1;$i<=$noq;$i++){ ?>



        <option value="<?=$i?>">



	<?	print $i;



        print '</option>';



	} // for



   print '</select></td>';   



	//print '<id=\"$questions_selected\" >';



	print "<tr>";



//	if($chapCounter==false) print "<h1> THERE ARE NO CHAPTERS AVAILABLE FOR THIS SUBJECT </h1>";



} // while



}

else{ // MCQ+SQ selected

  print "MCQ+SQ selected";

}





?>