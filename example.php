<?

include_once ("navigator.php");



$mynavigator = new navigator($tot_num_rows = 100, $rec_per_page = 20);

echo $mynavigator->html_data;

echo $mynavigator->sql_limit;
?>