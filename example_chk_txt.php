<?
for($i=1;$i<=5;$i++)
{
echo '<form action="" method="POST">';

echo "<input type=\"checkbox\" name=\"box[$i]\" value=\"$i\" />\r
Notes <input type=\"textbox\" name=\"note[$i]\" value=\"$i\" size=\"50\" /><hr />\r";
}
echo "<input type=\"Submit\" name=\"submit\" value=\"Submit\" />\r
</form>";

$box = $_POST['box'];
$note = $_POST['note'];
$total = count($box);
echo "total check box selected: " . $total . "<br />";

if(isset($_POST['submit']))
{
foreach ($box as $checked)
{
echo "Hello: {$note[$checked]}<br>";
}
}
?>