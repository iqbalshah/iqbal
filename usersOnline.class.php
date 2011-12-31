<?php
/*
usersOnline.class.php
Author: Ilir Fekaj
Contact: tebrino@hotmail.com
Last updated: July 28, 2005
Version: 1.1
Latest version & info: http://www.sim-php.info
Support: http://forum.sim-php.info/ (if you find bugs or you need help with installation)
Demo: http://www.free-midi.org

This very simple class enables you to track number of visitors online in
an easy and accurate manner. It's free for all purposes, just please don't
claim you wrote it. If you have any problems, please feel free to contact me.
Also if you like this script please put link to http://www.sim-php.info. Thanks

Simply paste this code where you wish your users online count to appear:

include_once ("usersOnline.class.php");
$visitors_online = new usersOnline();

if (count($visitors_online->error) == 0) {

	if ($visitors_online->count_users() == 1) {
		echo "There is " . $visitors_online->count_users() . " visitor online";
	}
	else {
		echo "There are " . $visitors_online->count_users() . " visitors online";
	}
}
else {
	echo "<b>Users online class errors:</b><br /><ul>\r\n";
	for ($i = 0; $i < count($visitors_online->error); $i ++ ) {
		echo "<li>" . $visitors_online->error[$i] . "</li>\r\n";
	}
	echo "</ul>\r\n";

}


Important: You need to create database connection and select database before creating object! Example connection would look like this:

$host = "localhost"; // your MySQL host i.e. the server on which the database is, usually localhost 
$user = ""; // your MySQL username 
$pass = ""; // your MySQL password 
$db = ""; // the database to which you're trying to connect to

$conn = mysql_connect("$host", "$user", "$pass") or die ("Unable to connect to database."); 
mysql_select_db("$db", $conn);

--------------------------------------------
Table structure (paste this code in PHPMyAdmin or whatever program you use for db management):
CREATE TABLE `useronline` (
  `id` int(10) NOT NULL auto_increment,
  `ip` varchar(15) NOT NULL default '',
  `timestamp` varchar(15) NOT NULL default '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id`(`id`)
) TYPE=MyISAM COMMENT='' AUTO_INCREMENT=1 ;

*/

class usersOnline {

	var $timeout = 600;
	var $count = 0;
	var $error;
	var $i = 0;
	
	function usersOnline () {
		$this->timestamp = time();
		$this->ip = $this->ipCheck();
		$this->new_user();
		$this->delete_user();
		$this->count_users();
	}
	
	function ipCheck() {
	/*
	This function will try to find out if user is coming behind proxy server. Why is this important?
	If you have high traffic web site, it might happen that you receive lot of traffic
	from the same proxy server (like AOL). In that case, the script would count them all as 1 user.
	This function tryes to get real IP address.
	Note that getenv() function doesn't work when PHP is running as ISAPI module
	*/
		if (getenv('HTTP_CLIENT_IP')) {
			$ip = getenv('HTTP_CLIENT_IP');
		}
		elseif (getenv('HTTP_X_FORWARDED_FOR')) {
			$ip = getenv('HTTP_X_FORWARDED_FOR');
		}
		elseif (getenv('HTTP_X_FORWARDED')) {
			$ip = getenv('HTTP_X_FORWARDED');
		}
		elseif (getenv('HTTP_FORWARDED_FOR')) {
			$ip = getenv('HTTP_FORWARDED_FOR');
		}
		elseif (getenv('HTTP_FORWARDED')) {
			$ip = getenv('HTTP_FORWARDED');
		}
		else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}
	
	function new_user() {
		$insert = mysql_query ("INSERT INTO useronline(timestamp, ip) VALUES ('$this->timestamp', '$this->ip')");
		if (!$insert) {
			$this->error[$this->i] = "Unable to record new visitor\r\n";			
			$this->i ++;
		}
	}
	
	function delete_user() {
		$delete = mysql_query ("DELETE FROM useronline WHERE timestamp < ($this->timestamp - $this->timeout)");
		if (!$delete) {
			$this->error[$this->i] = "Unable to delete visitors";
			$this->i ++;
		}
	}
	
	function count_users() {
		if (count($this->error) == 0) {
			$count = mysql_num_rows ( mysql_query("SELECT DISTINCT ip FROM useronline"));
			return $count;
		}
	}

}

?>