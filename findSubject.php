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
<?php
#### Roshan's Ajax dropdown code with php
#### Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
#### if you have any problem contact me at http://roshanbh.com.np
#### fell free to visit my blog http://roshanbh.com.np


$class=intval($_GET['class']);

//echo $class;

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
//mysql_select_db('a9060655_exam', $dbLink);
mysql_query("set names 'utf8'",$connection);

if (!$connection) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname, $connection);

	/*
	include('config.php');
	include('validate_fns.php');
    include('helper_fns.php');
    include('db_fns.php');

	SELECT *
FROM `subjects`
WHERE `class_id` =6
AND `subject_enabled` = 'n'
*/
$query=//"SELECT subject_id,subject_name FROM subjects WHERE class_id='$class'";
	"
	SELECT *
FROM `subjects`
WHERE `class_id` = '$class'
AND `subject_enabled` = 'y'
";

//echo $query;

$result=mysql_query($query);
$result1 = $result;
//echo $result;
?>
<select id="sub" name="subject" onchange="getChapter(this.value)" style="background-color:#11E964">
<option value="">Select Subject</option>
<? while($row=mysql_fetch_array($result)) { ?>
<option value=<?=$row['subject_id']?>><?=$row['subject_name']?></option>
<? } ?>
</select>

<tr style="">      
      <td>  </td>
      <td ><div id="chapterdiv"></td>
    </tr>
    