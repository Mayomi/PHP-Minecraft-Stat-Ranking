<?php
###########################################
#		    	数据库设置                #
###########################################

$set = array(
	'table_limit' => '25' /* 显示前多少名 */,
	'mysql' => array(
		'host' => 'localhost',
		'username' => 'root',
		'password' => 'root',
		'database' => 'test',
	)
);

###########################################

error_reporting(0);

$host = $set["mysql"]["host"];
$username = $set["mysql"]["username"];
$password = $set["mysql"]["password"];
$database = $set["mysql"]["database"];

try {
     $db = new PDO("mysql:host=$host;dbname=$database", "$username", "$password");
     $db->query("SET CHARACTER SET utf8");
} catch ( PDOException $e ){
     print $e->getMessage();
     die();
}

?>
