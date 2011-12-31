<?php
 
function mysql_fetch_full_result_array($result)
{
    $table_result=array();
    $r=0;
    while($row = mysql_fetch_assoc($result)){
        $arr_row=array();
        $c=0;
        while ($c < mysql_num_fields($result)) {        
            $col = mysql_fetch_field($result, $c);    
            $arr_row[$col -> name] = $row[$col -> name];            
            $c++;
        }    
        $table_result[$r] = $arr_row;
        $r++;
    }    
    return $table_result;
}


function mysql_fetch_all($result) {
 	  $return = array();
	  while($row=mysql_fetch_array($result)) {		       
	     $return[] = $row;			   
      }
 return $return;
}
		//	
function create_table($dataArr) {		
    for($j = 0; $j < count($dataArr); $j++) {				
		echo "<td align='right'>" . $dataArr[$j]."</td>";				
    }      
    echo "</tr>";
}
		
	
?>
