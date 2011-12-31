<?php
include './hit-counter.php';
$Counter = new PageCounter();
$Counter->SetFileCounter("./images/counter/example1count.txt");
$Counter->SetDigitDir("./images/counter/alt_digits/");
$Counter->SetMinLen('5'); // eg 00123
$Counter->SetImgSize('25','25'); // height and width of the digit image
// this is used to hold the generated html without the new  features set.
$noBorder = $Counter;
$noBorder->SetFileCounter("./images/counter/example2count.txt");
$noBorder->SetDigitDir("./images/counter/digits/");
// set border use and color.
$Counter->SetBorder(true,'#71FF71');
// the triger page allows the hit counter to be placed on any page but only increment on a single page.
// the triger also checks the query string, i.e. ?page=1&this=that
// remember that if the triger page has no ?page=1&this=that to include the ? at the end
$Counter->SetTrigerPage(true,'http://www.onlinetest.hostoi.com/index.php?querystring=value');
?>
<table cellpadding="0" cellspacing="0"><tr>
<td align="left" colspan="2"><br style="font-size:4pt">
<?= date("l F j, Y") ?><br><br style="font-size:4pt"></td></tr>
<tr><td height="20">&nbsp;</td></tr>
<tr>
<td>
<?php /*
This has a border set and a triger page<br>
To see this counter increment, change the triger page address to the one you are viewing this example from.<br><br style="font-size:4pt">
Site Visitors<br><br style="font-size:4pt">
<!--
simply use the following line anywhere in a page to display the Hit Counter.
-->
<?= $Counter->HitCount(); ?>
</td></tr>
<tr><td height="20">&nbsp;</td></tr>
<tr>
<td>




</td></tr>
</td></tr>
*/
?>
</table>