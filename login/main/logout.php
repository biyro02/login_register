<?php 
unset($_SESSION['user_name']);
if(session_destroy()){
	echo "Oturumunuz başarıyla sonlandırılmıştır.";
}

?>
 