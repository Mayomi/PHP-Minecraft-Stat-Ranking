<?php
###########################################
#		    	数据库设置                #
###########################################

error_reporting(0);

$host = "localhost";
$username = "root";
$password = "root";
$database = "test";

try {
     $db = new PDO("mysql:host=$host;dbname=$database", "$username", "$password");
     $db->query("SET CHARACTER SET utf8");
} catch ( PDOException $e ){
     print $e->getMessage();
     die();
}

?>
