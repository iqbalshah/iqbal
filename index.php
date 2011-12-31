<?php
	$pages = Array(
		'2'	=> Array('id' => '2', 'alias' => 'Adults', 'file' => '2.php'),
		'3'	=> Array('id' => '3', 'alias' => 'Science', 'file' => '3.php'),
		'4'	=> Array('id' => '4', 'alias' => 'Cooking', 'file' => '4.php'),
		'5'	=> Array('id' => '5', 'alias' => 'Literature', 'file' => '5.php'),
		'7'	=> Array('id' => '7', 'alias' => 'Biography', 'file' => '7.php'),
		'8'	=> Array('id' => '8', 'alias' => 'Children', 'file' => '8.php'),
		'9'	=> Array('id' => '9', 'alias' => 'Science', 'file' => '9.php')
	);
	$forms = Array(

	);
	$base_dir = dirname(__FILE__);
	$base_url = '/';
	include dirname(__FILE__).'/inc.functions.php';
	$home_page = '2';
	$page_id = parse_uri();
	$user_key = "pN4N4aRBIExlRD63Mj+s238z";
	$user_hash = "4f9be04779aa15f911a61b84c9463414";
	$blog_callback = "http://www.zyrobuilder.com/engine/?reset&ts=1323781482087blog.callback.php";
	$preview = false;
	if (isset($_POST["wb_form_id"])) include dirname(__FILE__).'/wb_scripts/wb_email_send.php';
	ob_start();
	if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'news')
		include dirname(__FILE__).'/news.php';
	else if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'blog')
		include dirname(__FILE__).'/blog.php';
	else
		include dirname(__FILE__).'/'.$pages[$page_id]['file'];
	ob_end_flush();

?>