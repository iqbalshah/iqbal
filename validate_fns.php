<?php

		//mysql_query("SET character_set_results=utf8", $connection);
		mb_language('uni');
		mb_internal_encoding('UTF-8');
		//mysql_select_db('test', $dbLink);
		//mysql_query("set names 'utf8'",$connection);


  function fields_filled_out($params)
	{
		foreach($params as $key=> $value)
		{
			 if( !isset($key) || ($value == '') )
			 {
			    return false; 
			 }
		}
		return true;
	}


?>
