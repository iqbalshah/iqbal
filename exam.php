<?php 
	if(!isset($_SESSION) ) session_start();
	    /*
		echo '<pre>' ;
			print_r($_SESSION['csc_data']['Data']);			
		echo '</pre>';
		
		exit;
		*/		
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Quiz Management System</title>

<!--<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />-->
<!-- <link rel="stylesheet" href="css/login.css" type="text/css" media="screen" /> -->
<link rel="stylesheet" href="css/quiz.css" type="text/css" media="screen" />		
<link rel="stylesheet" href="css/box.css" type="text/css" media="screen" />		

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.cookies.2.2.0.min.js"></script>
<script type="text/javascript" src="js/jquery.corner.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>

<script type="text/javascript">
    $('.headDisp').corner("5px");
    $('.divText div').corner("5px");
    $('.divData div').corner("5px");
    $('.listRows').corner('5px');
    $('.listCols').corner('5px');
</script>

<!--<script type="text/javascript">
jQuery(document).ready(function() {
    $('#quiz_setup').validate();
});
</script>
-->
<link rel="stylesheet" href="css/timer_dark.css" media="screen" type="text/css" />
	<!--[if IE 7]>
	<link href="css/ie7fix.css" rel="stylesheet" type="text/css" />
	<![endif]-->

	<script src="js/jquery.lwtCountdown-1.0.js" type="text/javascript"></script>
	
    <?php 
	if(!empty($_SESSION['csc_data'])){ ?>
    <script src="js/quiz.js" type="text/javascript"></script>
    <?php } ?>
	
	
</head>


<body class="sub">

<?php 

//include('headfoot/header.php');


if(!isset($_SESSION)){
    session_start();
}

  
  include_once('db_fns.php');
  //include_once('functions.php');
  


/*
    if(!empty($_SESSION['csc_data'])){
        include_once('timer.php');   
    }
*/


/*
echo "<pre>";
	print_r($_SESSION['csc_data']);
	echo "</pre>";
exit;
*/
				
					  
  //$subject = 
  
//echo $class = $_SESSION['csc_data']['class'];
  
$medium = $_SESSION['csc_data']['medium'];
		
		/*
	 foreach($subject as $subjectInfo)
      		 if($medium=='U') echo $Title = "<span dir='rtl'>" . $subjectInfo['subject_name'] . " برائے جماعت "; 
			 else echo $Title = "<span dir='ltr'>" . $subjectInfo['subject_name'] .  " for Class ";  
	  endforeach;
	 
	 //echo $UrduTitle = $UrduTitle . $subjectInfo['subject_name'];
	 */

	  
	  
	  $subject = $_SESSION['csc_data']['subject_name'];

	  if($medium=='U') 
	  		{
			$class = $_SESSION['csc_data']['class_name_urdu'];
			 $Title = "<span dir='rtl'> $subject برائے جماعت  $class "; 	  
			}
	  else {
	  		$class = $_SESSION['csc_data']['class_name_english'];
	  		 $Title = "<span dir='ltr'> $subject for Class $class";  
			} 

 ?>

<div id="wrapper">

	<div id="header"><img src="images/banner.jpg" width="800px" width="154px" /></div>

	<!-- Menu Start  -->
    <div id="menu">
        <div class="corner-left"></div>
        <div id="menuCenter">
    	   <?php include_once('menu.php'); ?>
        </div>
        <div class="corner-right"></div>
  </div>    <!-- menu End -->

<!-- Start Sidebar -->
<div id="sidebar">
    <div class="sideCnt">
        <?php include_once('sidebar.php'); ?>
    </div>
    <div id="sideFooter">
        <div class="corner-bLeft"></div>
        <div id="sideBtmCenter"><span>&rarr; SHOW / HIDE &larr;</span></div>
        <div class="corner-bRight"></div>
    </div>
            
</div>   <!-- sidebar End -->

	<div id="content">
		
<div id="content"> 
<!-- 
<strong>
<div id="box" style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:28px;"><? echo $Title;  ?></div>
</strong>
-->

	<div id="content">
		<!-- Start Final Summary -->
        
        <!-- End Summary -->



<div class="pqMain">

<div class="cntHolder">


<div class="pagination">
                <?php 
                    if(!empty($_SESSION['csc_data'])){
                        include_once('modules/pagination.php'); 
                    }
					
					
                ?>
</div>
			
        <style>
            form li {
                float: none;
            }
        </style>
		
 <form name="pq_quiz_form" id="pq_quiz_form" action="<?php $_SERVER['PHP_SELF']; ?>?action=process_quiz" method="post" >
<? 
include_once('modules/mcq.php');
   echo $tot_qstn = "Total Questions: " . $_SESSION['csc_data']['t_question'] . "<br />" ;
if(!empty($_SESSION['csc_data']) ){
	foreach($_SESSION['csc_data']['Data'] as $key=>$value)
			{
			//echo $key+1 . " : " . $value['question'] . "<br />";
			//echo $value['qid'];
			getMCQ($value,$key+1);

			}
}
   
   
?>
 <!-- Footer Buttons -->
            <?php 
            if(!empty($_SESSION['csc_data'])){
                include('modules/buttons.php'); 
            } ?>
            <!-- End Footer Buttons  -->
			<div id="pq_answer">
                <input type="hidden" name="current_qstn" id="current_qstn" value="" />
                <input type="hidden" name="total_qstn" id="total_qstn" value="" />
             </div>
			
</form>	

</div><!-- end .contHolder -->

</div><!-- end .pqMain -->	

	</div>    <!-- content End -->
	<!-- Footer Include -->
  
  <div id="footer"><?php include_once('headfoot/footer.php'); ?></div> <!-- wrraper End -->


	
		
</body>
</html>
