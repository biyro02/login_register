<?php 
session_start();
if(!isset($_SESSION['user_name'])){
	header('Location: ../index.php?mesaj=2');
}
include('inc/functions.php');

include('inc/header.php');

if(isset($_GET['login'])){
	include('main/'.$_GET['login'].'.php');
} else {
	include('main/profil.php');
}

include('inc/footer.php');

?>