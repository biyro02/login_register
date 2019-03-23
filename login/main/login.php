<?php 
include('../inc/functions.php');

$message = 1;
if(isset($_POST['lg_username'])){
	$user_name = $_POST['lg_username'];	
	if(isset($_POST['lg_password'])){
		$pass = $_POST['lg_password'];
		$db = getDbConnection();
		$query = $db->query("SELECT * FROM login_information WHERE user_name='".$user_name."' and  password='".md5($pass)."'", PDO::FETCH_ASSOC);
		if ( $query->rowCount() ){
			echo "fsdfsdf";
			session_start();
			$_SESSION['user_name'] = $user_name;
			header('Location: ../../index.php?main=login&login=profil');
			return;
		} else {
			$message = 4;
		}
					
	} else {
		$message = 5;
	}
} else {
	$message = 6;
}

header('Location: ../../index.php?main=login&mesaj='.$message);
?>