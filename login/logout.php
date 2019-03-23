<?php 
session_start();
unset($_SESSION['user_name']);
if(session_destroy()){
	echo "dfsfsdf";
	header('Location: ../index.php?mesaj=2');
}

?>
 