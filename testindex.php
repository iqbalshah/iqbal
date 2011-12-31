<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
<?php
session_start();
//import_request_variables("pgc","");
//if (!isset($user)||(!isset($pass))) {	header("Location: index.php"); }
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
		var tt = test_type_is(); // get the test type selected from the check boxes		
		var strURL="findChapter.php?subject="+subject_id + "&testtype=" + tt;
		//alert(strURL);
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

function updateChapter(subject_id,test_type) {		
		//var tt = test_type_is(); // get the test type selected from the check boxes		
		var strURL="findChapter.php?subject="+subject_id + "&testtype=" + test_type;
		//alert(strURL);
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

function test_type_is(){
    var form     = document.forms['form1'];
	var test_type=0;
	for (var i = 0; i < form.test_type.length; i++) {   
	   if(form.test_type[i].checked){
    	  test_type = form.test_type[i].value;
		  //alert("Test Type: " + test_type);		  
		  break;
	   } // if		      
	 //alert(document.getElementById('subjectdiv').innerHTML);  
	} 
 //alert("Test Type: " + test_type);
 return test_type;
}

function getquerystring(test_type) { 
 //alert("Test Type: " + test_type);		    		
// class is selected
 if( document.getElementById("cls").value.length==0)
 {
 //alert("Class not selected"); 
 }
// Subject is selected 
if( document.getElementById("sub").value.length==0)
 {
 //alert("Subject not selected");
 }
 else
 {
 //alert("Subject is selected");
 updateChapter(document.getElementById("sub").value,test_type); // SubjectId,TestType
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
<div id="main">
	<div id="content">
		<div id="header">
			<div class="name">
				<div class="logo"></div>
				<div class="slogan"><span class="n1"> Online</span>&nbsp;<span class="n2">Test</span><br />
makes you sharp enough before the actual test</div>
			</div>
			<div class="menu"><a href="index.php">HOME</a><a href="aboutus.php">ABOUT US</a><a href="partners.php">PARTNERS</a><a href="products.php">PRODUCTS</a><a href="download.php">DOWNLOAD</a><a href="contactus.php">CONTACT US</a></div>
		</div>
		<div id="content2">
			<div id="left">
				<?php
				/*
				<div class="search"><form action="#">&nbsp;&nbsp;&nbsp;SEARCH&nbsp;&nbsp;<input name="s1" type="text" class="inp" />&nbsp;&nbsp;<input name="" type="image" src="images/q.gif" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="login" value="login" type="text" class="inp" />&nbsp;&nbsp;<input name="passwd" type="password" class="inp" />&nbsp;&nbsp;<input name="" type="image" src="images/q.gif" /></form></div>
				*/
				?>
				<div class="text1">We believe in ideal education</div>
				<div class="dot_bg"><img src="images/dot_bg.gif" alt="" /></div>
				<div class="text2">
					<img src="images/ph1.jpg" align="left" alt="" />
					<br /><strong>If you want to get good grade in any admissin pre-req test, you are exactly at the right place. Please</strong><br /><br />

feel free to contact us We offer exclusive tests at economical rates, depending on your learning approach. Also, if you would like to test your knowledge in your subject, you are welcome by our test creating team. 
 </div>
				<div class="dot_bg"><img src="images/dot_bg.gif" alt="" /></div>
				<div class="text3"><strong>
				<?php 
//include('headfoot/header.php');
//  include('config.php');
  include('validate_fns.php');
  include('helper_fns.php');
  include('db_fns.php');
  //$controller = 'classes';
  // $search_classes = find_classes();
//  index2.php?template=quiz1
include('database_access_param.php');
$connection = mysql_connect($hostname, $dbuser, $dbpassword); //changet the configuration in required
		mysql_query("SET character_set_results=utf8", $connection);
		mb_language('uni');
		mb_internal_encoding('UTF-8');		
		mysql_query("set names 'utf8'",$connection);
if (!$connection) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname, $connection);
$query=//"SELECT * FROM classes where class_enabled=y"; Load only the enabled classes
"
SELECT *
FROM `classes`
WHERE `class_enabled`='y'
";
//echo $query . "<br />";
$result=mysql_query($query);
?>

<div id="left">

<div id="form">
<form method="post" action="test.php" name="form1">
  <div class="row">
   <div class="label"> Test Type </div><!-- end .label-->
   <div class="input"> <input type="radio" name="test_type" value="mcq" checked="checked" onClick=	"getquerystring(this.value)"> MCQ
   <input type="radio" name="test_type" value="sq" onClick="getquerystring(this.value)"> Short Questions
   <input type="radio" name="test_type" value="sq" onClick="getquerystring(this.value)"> Long Questions
   <input type="radio" name="test_type" value="sq" onClick="getquerystring(this.value)"> Numericals
      </div> <!-- end .input -->
	</div> <!--- end .row -->
    
    
    <div class="row">
   <div class="label"> Show Answers </div><!-- end .label-->
   <div class="input" id="classdiv"> <input type='checkbox' name='show_ans' value='y' checked='checked'> 
    [applicable in mcq]
      </div> <!-- end .input -->
	</div> <!--- end .row -->
    
    
    <div class="row">
   <div class="label"> Class </div><!-- end .label-->
   <div class="input"> <select name="class" id="cls" onChange="getSubject(this.value)">
	<option value="">Select Class</option>
  <?php while ($row=mysql_fetch_array($result)) {
        $class_id=intval($row['class_id']); ?>
        <option value='<?php echo stripslashes($class_id); ?>'>
		<?=$row['class_name_english'] ?>
        </option>
		<?php } ?>
   </select>
      </div> <!-- end .input -->
	</div> <!--- end .row -->
    
    
     <div class="row">
   <div class="label"> Subject </div><!-- end .label-->
   <div class="input" id="subjectdiv"> <select id="sub" name="subject">
            <option value="">Select Class First</option>
          </select>
      </div> <!-- end .input -->
	</div> <!--- end .row -->


     <div class="row">
   <div class="input" id="chapterdiv">     <div id="chapterdiv"></div>
      </div> <!-- end .input -->
	</div> <!--- end .row -->
	
	
	 <div class="row">
   <div class="label"> </div><!-- end .label-->
   <div class="input" id="sub">    <input type="submit" name="submit" value="Generate Test" />
      </div> <!-- end .input -->
	</div> <!--- end .row -->
    

    
	
</form>


</div> <!-- end #form-->
    
</div> <!--end #formWrap -->


<?php //include('hit_counter_example.php');
//include('headfoot/footer.php'); 
?>
				</div>
			</div>
			<div id="right">
			<div class="news">Updates</div>
			<strong>28 Nov 2011 ::: Get your Laptop free </strong><br />
			<br />
            Mian Sahahbaz Sharif's Gift for talented students of Punjab at : <a href="http://www.youth.punjab.gov.pk/">http://www.youth.punjab.gov.pk</a>
<div class="im_more">
		<div class="more"><a href="http://www.youth.punjab.gov.pk">READ MORE</a></div>
	</div>
	<strong>28 Febr 2002 ::: News Header</strong><br /><br />

If you're interested in licensing or reselling  in your country, please feel free to contact us We offer exclusive licensing or reseller volume rates.<br /><br />
<strong>28 Febr 2002 ::: News Header</strong><br /><br />

If you're interested in
</div>
		</div>
		<div id="footer">
			<div class="f1"><div class="f_menu"><a href="#">HOME</a><a href="#">ABOUT US</a><a href="#">PARTNERS</a><a href="#">SERVICES</a><a href="#">CONTACT US</a><a href="#">HELP</a></div>
			Copyright &copy; 2011 Center for Online education . All rights reserved.<br/>
			<a href="http://www.ecenterpk.com">EcenterPk</a> by <a href="http://www.freetemplatesonline.com">Khawaja Muneeb</a> (Chairman IT Association Punjab) &nbsp; <br /> <a href="http://www.ecenterpk.com">Ejaz Hasan </a></div>
			<div class="f2">&nbsp;</div>
		</div>
	</div>		
</div>
</body>
</html>
