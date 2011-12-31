<?php

function parse_uri() {
	global $home_page, $pages, $base_url;
	
	$nh = preg_replace('#^http[s]*://[^/]+/#i', '/', $base_url);
	$nh = preg_replace('#/[^/]+/\.\./#i', '/', $nh);
	$ru = trim(isset($_SERVER['REQUEST_URI']) ? urldecode($_SERVER['REQUEST_URI']) : '/');
	$ru = str_replace($nh, '', $ru);
	$ru = preg_split('#[\ \t]*[/]+[\ \t]*#i', $ru, -1, PREG_SPLIT_NO_EMPTY);
	$ru = array_map('trim', $ru);
	
	if (!count($ru))
		return $home_page;
	$ru = implode('/', $ru);
	if (isset($pages[$ru]))
		return $ru;
	if (!$ru)
		return $home_page;
	
	foreach ($pages as $id => $pi)
		if ($ru == $pi['alias']) return $id;
	
	return $home_page;
}

function is_mail($mail) {
	if (preg_match("/^[0-9a-zA-Z\.\-\_]+\@[0-9a-zA-Z\.\-\_]+\.[0-9a-zA-Z\.\-\_]+$/is", trim($mail)))
		return $mail;
	return "";
}

function mini_text($text) {
	return trim(substr(strip_tags($text), 0, 100), " \n\r\t\0\x0B.").'...';
}

$Wildfire_header_sent = false;
$Wildfire_msg_idx = false;
	
function wf_log($msg, $type = 'LOG') {
	global $Wildfire_header_sent, $Wildfire_msg_idx;
	$types = Array('LOG', 'INFO', 'WARN', 'ERROR');
	$type = in_array(strtoupper($type), $types) ? strtoupper($type) : $types[0];
	$escape = "\"\0\n\r\t\\";
	
	$trs = debug_backtrace();
	$last = Array();
	foreach ($trs as $li) {
		if (isset($li['class']) && $li['class'] == __CLASS__) { $last = $li; continue; }
		$last = $li;
		break;
	}
	
	$message = '[{"Type":"'.$type.'","File":"'.addcslashes($last['file'], $escape).'",'.
		'"Line":'.$last['line'].'},"'.addcslashes($msg, $escape).'"]';
	if ($Wildfire_msg_idx === false) $Wildfire_msg_idx = 0;
	if (!$Wildfire_header_sent) {
		$Wildfire_header_sent = true;
		header('X-Wf-Protocol-1: http://meta.wildfirehq.org/Protocol/JsonStream/0.2');
		header('X-Wf-1-Plugin-1: http://meta.firephp.org/Wildfire/Plugin/FirePHP/Library-FirePHPCore/0.3');
		header('X-Wf-1-Structure-1: http://meta.firephp.org/Wildfire/Structure/FirePHP/FirebugConsole/0.1');
	}
	$count = ceil(strlen($message) / 5000);
	for ($i = 0; $i < $count; $i++) {
		$Wildfire_msg_idx++;
		$part = substr($message, ($i * 5000), 5000);
		header('X-Wf-1-1-1-'.$Wildfire_msg_idx.': '.(($i == 0) ? strlen($message) : '').
			'|'.$part.'|'.(($i < ($count - 1)) ? '\\' : ''));
	}
}

function trace($var, $return = false) {
	$code = '';
	if (is_array($var) || is_object($var)) {
		$code .= '<pre style="margin: 0;">'.print_r($var, true).'</pre>';
	} else {
		$code .= $var;
	}
	if (is_bool($var)) $code = '<span style="color: #0000ff; font-weight: bold; font-style: normal; font-family: Courier New; font-size: 12px;">'.($var ? 'TRUE' : 'FALSE').'</span>';
	if (is_null($var)) $code = '<span style="color: #0000ff; font-weight: bold; font-style: normal; font-family: Courier New; font-size: 12px;">NULL</span>';
	
	$code = '<div style="padding: 0px; margin: 4px 0; position: relative; float: none; clear: both; border: 1px dashed #e5e09b;">'.
			'<a style="display: block; position: absolute; right: 3px; top: 2px; font-weight: bold; text-decoration: none; line-height: 14px; color: #676767; font-family: arial,sans-serif; font-size: 19px;" href="#" onclick="this.parentNode.style.display = \'none\'; return false;" title="Hide">'.
				'&times;'.
			'</a>'.
			'<div id="FormMessages_message" style="padding: 17px 20px; margin: 0; float: none; background: #fffde0; color: #000000; font-family: Arial; font-size: 13px; font-style: italic;">'.$code.'</div>'.
		'</div>';
	if ($return) return $code; else echo $code;
}

function http_get($url, $post_vars = false) {
	$post_contents = '';
	if ($post_vars)
	{
		if (is_array($post_vars))
		{
			foreach($post_vars as $key => $val)
				$post_contents .= ($post_contents ? '&' : '').urlencode($key).'='.urlencode($val);
		}
		else
			$post_contents = $post_vars;
	}

	$uinf = parse_url($url);
	$host = $uinf['host'];
	$path = $uinf['path'];
	$path .= (isset($uinf['query']) && $uinf['query']) ? ('?'.$uinf['query']) : '';
	$headers = Array(
		($post_contents ? 'POST' : 'GET')." $path HTTP/1.1",
		"Host: $host",
	);
	if ($post_contents)
	{
		$headers[] = 'Content-Type: application/x-www-form-urlencoded';
		$headers[] = 'Content-Length: '.strlen($post_contents);
	}

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 600);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	if ($post_contents)
	{
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_contents);
	}

	$data = curl_exec($ch);
	if (curl_errno($ch))
		return false;
	curl_close($ch);

	return $data;
}

function post_comment($postId, $name, $message) {
	global $user_key, $user_hash, $blog_callback;
	if( !function_exists("curl_init") ) return false;
	return http_get($blog_callback, Array(
	   "key" => $user_key,
	   "hash" => $user_hash,
	   "id" => intval($postId),
	   "name" => base64_encode($name),
	   "message" => base64_encode($message)
	));
}

if (!function_exists('file_put_contents')) {
	if (!defined('FILE_USE_INCLUDE_PATH'))
		define('FILE_USE_INCLUDE_PATH', 1);
	if (!defined('FILE_APPEND'))
		define('FILE_APPEND', 8);
	if (!defined('LOCK_EX'))
		define('LOCK_EX', 2);
	function file_put_contents($filename, $data, $flags = 0, $context = false) {
		if (is_array($data))
			$data = implode('', $data);
		$res = false;
		if ($fh = fopen($filename, ($flags & FILE_APPEND) ? 'a' : 'w',
			($flags & FILE_USE_INCLUDE_PATH) ? true : false)) {
			$res = fwrite($fh, $data);
			fclose($fh);
		}
		return $res;
	}
}

if (!function_exists('json_decode')) {
	require_once dirname(__FILE__).'/class.json.php';
	global $_json_service;
	$_json_service = new Services_JSON();
	function json_decode($json, $assoc = false) {
		global $_json_service;
		$_json_service->use = $assoc ? SERVICES_JSON_LOOSE_TYPE : 0;
		return $_json_service->decode($json);
	}
	function json_encode($data, $assoc = false) {
		global $_json_service;
		$_json_service->use = $assoc ? SERVICES_JSON_LOOSE_TYPE : 0;
		return $_json_service->encode($data);
	}
}

?>