<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Quiz Management System</title>

<script language="javascript" type="text/javascript">

<?php

session_start();

import_request_variables("pgc","");


if (!isset($user)||(!isset($pass))) {	header("Location: index.php"); }

/*
function get(){
	$.post('data.php', {form1.class.value},
	      function(output){
		                  $('#gett').html(output).show();
						  });

*/
?>

function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getSubject(class_id) {		
		
		//alert("Class id is : " + class_id);
		var strURL="findSubject.php?class="+class_id;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('subjectdiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	
	function getQuestion(subject_id,chap_id) {		
		
		//alert("chapter Id: " + chap_id);
		
		var strURL="findQuestion.php?chap_id="+chap_id;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
					//alert("chapter Id: " + chap_id);
						document.getElementById('questiondiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	
	function getChapter(subject_id) {		
		var strURL="findChapter.php?subject="+subject_id;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {												
						document.getElementById('chapterdiv').innerHTML=req.responseText;												
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}							
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}



</script>

<style type="text/css">
<!--
body,td,th {
	color: #3300CC;
}
-->
</style></head>

<body>

<?php 
  include('config.php');
  include('validate_fns.php');
  include('helper_fns.php');
  include('db_fns.php');
  
  //$controller = 'classes';
  
  // $search_classes = find_classes();
  
//  index2.php?template=quiz1
 ?> 
<div id="main" align="left"> 
<form method="post" action="test.php" name="form1">
  <table width="35%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="50">Class</td>
      <td  width="50"><?php /*
    <select name="class" onChange="getSubject(this.value)">
	<option value="">Select Class</option>
	
  <?php foreach($search_classes as $search_class): ?>
        <option value="<?php echo $search_class['class_id'] ?>">
		<?php echo $search_class['class_name'] ?>
        </option>
		<?php endforeach; ?>
   </select>
   */   
   ?>
          <select name="class" onchange="getSubject(this.value)">
            <option value="1">9th</option>
        </select></td>
    </tr>
    <tr style="">
      <td>Subject</td>
      <td ><div id="subjectdiv">
        <select name="subject" >
            <option>Select Class First</option>
          </select>
      </div></td>
    </tr>
    <tr style="">
      <td>Chapter</td>
      <td ><div id="chapterdiv">
        <select name="chapter">
            <option>Select Subject First</option>
          </select>
      </div></td>
    </tr>
    <?php
 /* 
  <tr style="">
    <td>Question</td>
    <td ><div id="questiondiv"><select name="question">
	<option>Select Chapter First</option>
        </select></div></td>
  </tr>
  */
  ?>
  <td>&nbsp;</td>
      <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="Start Quiz" />
      &nbsp;</td>
  </tr>
  </table>
</form>

</div>
 
</body>
</html>
