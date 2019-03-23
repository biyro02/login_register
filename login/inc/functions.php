<?php 
function getDbConnection(){
	try {
		$user		= 'root';
		$password 	= '';
		$ip 		= 'localhost';
		$dbname 	= 'web45';
		$db = new PDO("mysql:host=$ip;dbname=$dbname;charset=utf8", "$user", "$password");
		return $db;
	} catch ( PDOException $e ){
		print $e->getMessage();
	}
}
?>