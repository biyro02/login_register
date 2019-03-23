<?php 
include('../inc/functions.php');
$requirements = ['pass', 'fullname', 'agree', 'birthdate', 'email', 'user_name'];
$db = getDbConnection();
$page = "register";

$user_name =(isset($_POST['reg_username'])) ? $_POST['reg_username'] : null;
$pass = (isset($_POST['reg_password'])) ? $_POST['reg_password'] : null;
$re_pass = (isset($_POST['reg_password_confirm'])) ? $_POST['reg_password_confirm'] : null;
$email = (isset($_POST['reg_email'])) ? $_POST['reg_email'] : null;
$fullname = (isset($_POST['reg_fullname'])) ? $_POST['reg_fullname'] : null;
$agree = (isset($_POST['reg_agree'])) ? $_POST['reg_agree'] : null;
$birthdate = (isset($_POST['reg_birthdate'])) ? $_POST['reg_birthdate'] : null;

if($agree=='on'){
	if($pass==$re_pass){
		foreach($requirements as $requirement){
			if($$requirement=='' || is_null($$requirement) || !isset($$requirement)){
				$mesaj_no = 9;
				header("Location: ../../index.php?main=register&mesaj=$mesaj_no");
				return false;
			}
		}
		$sql = "
		INSERT INTO login_information(user_name, password, is_active)
		VALUES(?, ?, 1)
		";
		$sth = $db->prepare($sql);
		$result = $sth->execute([$user_name, md5($pass)]);
		$login_id = $db->lastInsertId();
		if($result){
			$sql2 = "INSERT INTO personal_information(name_surname, address, phone_number, email, photo, birth_date, login_id) VALUES(?, ?, ?, ?, ?, ?, ?)";
			$sth2 = $db->prepare($sql2);
			$insert_array = [$fullname, null, null, $email, null, $birthdate, $login_id];
			try{
				$result2 = $sth2->execute($insert_array);
			} catch(PDOException $e){
				echo $e->getMessage();
			}
			print_r($result2);
			if($result2){
				$mesaj_no=11;
				$page = 'login';
			} else {
				$mesaj_no = 10;
			}
		} else {
			$mesaj_no = 10;
		}
	} else {
		$mesaj_no = 8;
	}
} else {
	$mesaj_no = 7;
}
header("Location: ../../index.php?main=$page&mesaj=$mesaj_no");
?>