<?php
/**
  * connects to database server and selects a database
  * @return bool (resource)
  */  
  function db_connect()
  {
	include('database_access_param.php');
	/*
	$hostname = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname = "a9060655_exam";
	*/

$connection = mysql_connect($hostname, $dbuser, $dbpassword); //changet the configuration in required

		mysql_query("SET character_set_results=utf8", $connection);
		mb_language('uni');
		mb_internal_encoding('UTF-8');
		mysql_query("set names 'utf8'",$connection);
	
		if(!$connection)
    {
	    echo "can not connected to SERVER";
		return false;
    }
    if(!mysql_select_db($dbname, $connection)) // database name
    {
	    echo "database could not be selected";
	    return false;
    }
		
		return  $connection;
  }
	
	
	function db_result_to_array($result)
	{
	  $res_array = array();
		
		for ($count=0;  $row = mysql_fetch_array($result) ; $count++)
		{
		  $res_array[$count] = $row;
		}
		
		return $res_array;
	}
	

	/**
	 * selects quiz out of database.. user can supply params
	 * @param string $query_str
	 * @param string $subject
	 * @return array
	 */
	 
	 /*
	function find_quiz($query_str = null, $subject = null)
	{
	  db_connect();
		
		$select =  "SELECT 
                   jobs.id, 
                   jobs.location, 
                   jobs.title, 
                   jobs.company, 
                   jobs.description, 
                   jobs.url ";
		$from = "FROM 
		           jobs ";
							 
		$where = "WHERE
		           jobs.id > 0 AND 
							 DATE_ADD( created_at, INTERVAL 30 DAY ) > NOW() ";
							 			 
		$order = " ORDER BY  jobs.id DESC";
							 
	  if (!empty($query_str))
	  {
	 	  	$select .= sprintf("
					               , match(title,location,description) 
                         against ('%s' IN BOOLEAN MODE) 
                         as relevance ",
												 mysql_real_escape_string($query_str)
					              );
				
			$where .= sprintf("
				                 AND match(title,location,description) against 
												('%s' IN BOOLEAN MODE) ", 
												mysql_real_escape_string($query_str)
												);	
			
			$order = " ORDER BY relevance DESC";
	
	 	}	
		
		
	  if (!empty($category))
	  {
			$from .= ", jobs2categories ";
			
			$where .= sprintf("
				                  AND jobs.id = jobs2categories.job_id 
												 AND jobs2categories.category_id = '%s'", 
												 mysql_real_escape_string($category)
												);	
	 	}	
		
		$query = $select.$from.$where.$order;

		$result = mysql_query($query);
		
		$number_of_results = mysql_num_rows($result);
		
		if($number_of_results == 0)
	  {
			return false;
		}
		
		$result = db_result_to_array($result);
		
		return $result;
		
	}
	
	*/
		
 /**
 * selects one job
 * @param int $id
 * @return array
 */
	/*
	function find_job($id)
	{
	   db_connect();
		
		$query =  sprintf("SELECT 
                         jobs.id, 
                         jobs.location, 
                         jobs.title, 
                         jobs.company, 
                         jobs.description, 
                         jobs.url,
												jobs.to_apply
							       FROM 
							          jobs
							       WHERE 
							         jobs.id = '%s'	 
									", mysql_real_escape_string($id)
									);

		$result = mysql_query($query);
		
	  $row = mysql_fetch_array($result);
		
		return $row;
	
	}
	
	*/
	// load all the questions from a particulat chapter of a subject
	function find_questions($chapId)
	{
	   db_connect();
		
		$query =  sprintf("SELECT 
                         questions.qid, 
                         questions.question, 
                         questions.ranswer, 
                         questions.wanswer1, 
                         questions.wanswer2, 
                         questions.wanswer3											
							       FROM 
							          questions
							       WHERE 
							         questions.chap_id = '%s'	 
									", mysql_real_escape_string($chapId)
									);

//echo $query;

		$result = mysql_query($query);
		
//echo $result;

	  $number_of_results = mysql_num_rows($result);
		
		if($number_of_results == 0)
	  {
			echo "No questions found for this chapter";
			return false;
		}
		
		
	  $row = mysql_fetch_array($result);

//echo $row;		

		return $row;
	
	}
	
	
	function find_question($id)
	{
	   db_connect();
		
		$query =  sprintf("SELECT 
                         questions.question_id, 
                         questions.question, 
                         questions.option1, 
                         questions.option2, 
                         questions.option3, 
                         questions.ans
											
							       FROM 
							          questions
							       WHERE 
							         questions.question_id = '%s'	 
									", mysql_real_escape_string($id)
									);

//echo $query;

		$result = mysql_query($query);
		
//echo $result;

	  $row = mysql_fetch_array($result);
		
		return $row;
	
	}
	
	
	
 /**
 * selects classes and counts number of subjects in each class.
 * @param type variable
 * @return type
 */
	/*
	function find_classes()
	{
	   db_connect();
		
		$query =  "SELECT 
                  classes.class_name_english,classes.class_name_urdu, 
									COUNT(subjects.subject_id) as numsubjects
							  FROM
								  classes
							  LEFT JOIN
								   subjects ON classes.class_id = subjects.class_id
								GROUP BY
								    classes.class_id
								 ORDER BY
								    classes.class_name ASC
									";

		//echo $query;
		
		$result = mysql_query($query);
		
		$result = db_result_to_array($result);
		
		return $result;
	
	}
	*/
	 /**
 * selects subjects and counts number of chapters in each subject.
 * @param type variable
 * @return type
 */
	/*
	function find_subjects()
	{
	   db_connect();
		
		$query =  "SELECT 
                  subjects.subject_name									
							  FROM
								  subjects
								GROUP BY
								    subjects.subject_id
								 ORDER BY
								    subjects.subject_name ASC
									";									

//		echo $query;
		
		$result = mysql_query($query);
		
	//	echo $result;
				
		$result = db_result_to_array($result);
				
		
		return $result;
	
	}
	*/


	function find_class($id)
	{
	   db_connect();
		

		$query =  sprintf("SELECT 
                        classes.class_name_english, classes.class_name_urdu, classes.class_id 									    
							       FROM 
							         classes
							       WHERE 
							         classes.class_id = '%s'	 
									", mysql_real_escape_string($id)
									);
												

		//echo $query;
		
		$result = mysql_query($query);
		
		//echo $result;
				
		$result = db_result_to_array($result);
		
		//echo $result;
		
		return $result;
	
	}

	
	function find_subject($id)
	{
	   db_connect();
		

		$query =  sprintf("SELECT 
                        subjects.subject_name    
						       FROM 
							         subjects
							       WHERE 
							         subjects.subject_id = '%s'	 
									", mysql_real_escape_string($id)
									);
												

		//echo $query;
		
		$result = mysql_query($query);
		
		//echo $result; // res id
				
				
		$result = db_result_to_array($result);
		
		//echo $result;
		
		return $result;
	
	}
	
	function find_chapter($id)
	{
	   db_connect();
		

		$query =  sprintf("SELECT 
                        chapters.chap_name, chapters.chap_no, chapters.chap_id 									    
							       FROM 
							         chapters
							       WHERE 
							         chapters.chap_id = '%s'	 
									", mysql_real_escape_string($id)
									);
												

		//echo $query;
		
		$result = mysql_query($query);
		
		//echo $result;
				
		$result = db_result_to_array($result);
		
		//echo $result;
		
		return $result;
	
	}
	/*
	function find_chapters()
	{
	   db_connect();
		
		$query =  "SELECT 
                  chapters.chap_name, 									
									COUNT(questions.question_id) as numquestions
							  FROM
								  chapters
							  LEFT JOIN
								   questions ON chapters.chap_id = questions.chap_id
								GROUP BY
								    chapters.chap_id
								 ORDER BY
								    chapters.chap_name ASC
									";

		//echo $query;
		
		$result = mysql_query($query);
		
		$result = db_result_to_array($result);
		
		return $result;
	
	}
*/


 
 /**
 * selects one category
 * @param int $id
 * @return array
 */
 
 /*
	function find_category($id)
	{
	   db_connect();
		
		$query =  sprintf("SELECT 
                        categories.name, 
									      categories.id
							       FROM 
							         categories
							       WHERE 
							         categories.id = '%s'	 
									", mysql_real_escape_string($id)
									);

		$result = mysql_query($query);
		
	  $row = mysql_fetch_array($result);
		
		return $row;
	
	}	
	
	*/
	
 /**
 * creates job
 * @param array $params
 * @return bool
 */
	/*
	function create_job($params)
	{
	   db_connect();
		
		$query =  sprintf("INSERT INTO jobs set 
			                    jobs.company = '%s',
												  jobs.email = '%s',
												  jobs.url = '%s',
												  jobs.title = '%s', 
                           jobs.location = '%s', 
                           jobs.description = '%s',
												  jobs.to_apply = '%s',
												  created_at = NOW() 
									", mysql_real_escape_string($params['company']),
										 mysql_real_escape_string($params['email']),
										 mysql_real_escape_string($params['url']),
									   mysql_real_escape_string($params['title']),
										 mysql_real_escape_string($params['location']),
										 mysql_real_escape_string($params['description']),
										 mysql_real_escape_string($params['to_apply'])
					
									);

		$result = mysql_query($query);
		if(!$result)
		{
			 return false;
		}
		
		$job_id = mysql_insert_id();
		
		if(!empty($params['cats'])) 
		{
       foreach($params['cats'] as $cat_id) 
			 {
				 $query = sprintf("INSERT 
					                     INTO jobs2categories
					                          set
																		 category_id = '%s',
																		 job_id = '%s'",
																		 mysql_real_escape_string($cat_id),
																		 mysql_real_escape_string($job_id)
																		 );
				
				 $result = mysql_query($query);
				 
				 if(!$result)
				 {
					 return false; 
				 }
				 
			 }
 
   	}
		
		 return true;
	
	}	
	
*/

?>