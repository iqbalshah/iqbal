<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
   "http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
<head>
<title>Lesson 3</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
   if ($_SERVER['REQUEST_METHOD'] != 'POST'){
      $me = $_SERVER['PHP_SELF'];
?>
<h1 align="center">Widget Order Form</h1>
<form name="form1" method="post" action="<?=$me?>">
   <table border="0" align="center" cellpadding="5" cellspacing="0">
      <tr>
         <td align="right" valign="middle">Name:</td>
         <td><input name="Name" type="text" size="40">
         </td>
      </tr>
      <tr>
         <td align="right" valign="middle">Size:</td>
         <td><select name="size">
               <option value="small">Small</option>
               <option value="medium">Medium</option>
               <option value="large">Large</option>
            </select>
         </td>
      </tr>
      <tr>
         <td align="right" valign="middle">Options:</td>
         <td><select name="options[]" size="4" multiple id="options[]">
               <option value="magnifier">Magnifier
               <option value="reducer">Reducer
               <option value="timer">Timer
               <option value="oscillator">Oscillator</option>
            </select>
         </td>
      </tr>
      <tr>
         <td align="right" valign="middle">Color:</td>
         <td><input type="radio" name="color" checked value="red">
            Red<br>
            <input type="radio" name="color" value="green">
            Green<br>
            <input type="radio" name="color" value="blue">
            Blue</td>
      </tr>
      <tr>
         <td align="right" valign="middle">Accessories:</td>
         <td><input name="extension" type="checkbox" 
            id="extension" value="extension">Extension<br>
            <input name="wallmount" type="checkbox"
            id="wallmount" value="wallmount">Wall Mount<br>
            <input name="deskmount" type="checkbox"
            id="deskmount" value="deskmount">Desk Mount</td>
      </tr>
      <tr>
         <td align="right" valign="top">Comments:</td>
         <td><textarea name="MsgBody" cols="40" rows="6"></textarea>
         </td>
      </tr>
      <tr>
         <td> </td>
         <td><input type="submit" name="Submit"
               value="Send">
         </td>
      </tr>
   </table>
</form>
<?php
   } else {
      error_reporting(0);
      // initialize a array to 
      //hold any errors we encounter
      $errors = array();
      // test to see if the form was actually 
      // posted from our form
      $page = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
      if (!ereg($page, $_SERVER['HTTP_REFERER']))
         $errors[] = "Invalid referer<br>\n";
      // check to see if a name was entered

      if (!$_POST['Name'])
         $errors[] = "Name is required";
      // if there are any errors, display them
      if (count($errors)>0) {
         foreach($errors as $err)
            echo "$err<br>\n";
         echo "<br>Please use your browser's Back button to fix.";
      } else {
         // no errors, so we build our message
         switch($_POST['color']){
            case 'red':
               $recipient = 'redperson@myaddress.com';
               break;
            case 'green':
               $recipient = 'greenperson@myaddress.com';
               break;
            case 'blue':
               $recipient = 'blueperson@myaddress.com';
               break;
            default:
               $recipient = 'me@myaddress.com';
         }
         $subject = "Widget On Line Order";
         $from = stripslashes($_POST['Name']);
         $msg = "Message sent by $from\n";
         $msg.="\nSize: ".$_POST['size'];
         $options=$_POST['options'];
         $msg.="\nOptions:";
         if ($options)
            for ($i=0;$i<count($options);$i++)
               $msg.= "\n- $options[$i]";
         else
            $msg.="\n- None";
         $msg.="\nColor: ".$_POST['color'];
         $extension=($_POST['extension'])?"Extension: Yes":"Extension: No";
         $wallmount=($_POST['wallmount'])?"Wallmount: Yes":"Wallmount: No";
         $deskmount=($_POST['deskmount'])?"Deskmount: Yes":"Deskmount: No";
         $msg.="\n$extension\n$wallmount\n$deskmount";
         $msg.="\n".stripslashes($_POST['MsgBody'])."\n";
         if (mail($recipient,$subject,$msg)){
            echo "<p>Thanks for your order!</p>";
            echo nl2br($msg);
         } else
            echo "An unknown error occurred.";
      }
   }
?>


</body>
</html>


