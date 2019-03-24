<?php 

include('functions/main_functions.php');

include('inc/header.php');
//jxnsjfdk
$mesaj_no = (isset($_GET['mesaj'])) ? $_GET['mesaj'] : 0;

if(!isset($_GET['main'])){
	include('inc/main/main.php');
} else {
	include('inc/main/'.$_GET['main'].'.php');
}

include('inc/footer.php');

?>