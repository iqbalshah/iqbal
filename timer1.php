<?php
session_start();

//$totaltime = $_SESSION[''];

$mins = isset($_SESSION["mins"]) ? $_SESSION["mins"] : 10;
$secs = isset($_SESSION["secs"]) ? $_SESSION["secs"] : 0;

/* 
If you refresh the page
   or
   leave the page to browse and come back
   then the timer will stopped and remain stopped until you start again. 
   
*/


?>

<html>
<head>
<style>
#timer {
border:2px solid red;
font-family:verdana;
font-size:16pt;
font-weight:bold;
background: #FECFC7;
width:85px;
text-align:center;
}
</style>
</head>
<body>
<form name="cd">
<input id="timer" name="timer" type="text" readonly="true">
</form>
<script>
var xmlhttp = false;
var mins = "<?php echo $mins ?>";
var secs = "<?php echo $secs ?>";
var secs1 = secs;
if(secs < 10){secs = "0" + secs;}
document.getElementById("timer").value = mins + ":" + secs;
secs = secs1;
var cd = setInterval("count_down_timer()",1000);
function count_down_timer()
{
 if(secs == 0 && mins == 0)
 {
  clearInterval(cd);
  alert("The time is up!");
  }
 else{if(secs == 0){secs = 59;mins--;}}
 if(secs < 10){secs = "0" + secs;}
 var tm = mins + ":" + secs;
 document.getElementById("timer").value = tm;
 send_request(mins,secs);
 secs--;
 }
function createRequest()
{
 /*@cc_on @*/
 /*@if (@_jscript_version >= 5)
 // JScript gives us Conditional compilation, we can cope with old IE versions.
 // and security blocked creation of the objects.
  try {
   xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
   try {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
   } catch (E) {
    xmlhttp = false;
   }
 }
 @end @*/
 if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
    try {
        xmlhttp = new XMLHttpRequest();
    } catch (e) {
        xmlhttp=false;
    }
 }
 if (!xmlhttp && window.createRequest) {
    try {
        xmlhttp = window.createRequest();
    } catch (e) {
        xmlhttp=false;
    }
  }
 return xmlhttp;
 }
function send_request(m,s)
{
 var conn = createRequest();
 var url="update_session.php?min=" + m + "&sec=" + s;
 conn.open("GET", url);
 conn.send(null);
}
</script>
</body>
</html>