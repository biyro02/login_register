<?php 
session_start();
if(isset($_GET['login']) && isset($_SESSION['user_name'])){
	header('Location: login/index.php?login='.$_GET['login']);
} else {
?>

	<!-- Where all the magic happens -->
	<!-- LOGIN FORM -->
	<div class="text-center" style="padding:50px 0">
		<div class="logo">Oturum aç</div>
		<!-- Main Form -->
		<div class="login-form-1">
			<form id="login-form" class="text-left" method="post" action="login/main/login.php">
				<div class="login-form-main-message">
					<?php if(show_message($mesaj_no)!=''){
						echo "<p>".show_message($mesaj_no)."</p>";
					} ?>
				</div>
				<div class="main-login-form">
					<div class="login-group">
						<div class="form-group">
							<label for="lg_username" class="sr-only">Kullanıcı adı</label>
							<input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="kullanıcı adınız">
						</div>
						<div class="form-group">
							<label for="lg_password" class="sr-only">Şifre</label>
							<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="şifreniz">
						</div>
						<div class="form-group login-group-checkbox">
							<input type="checkbox" id="lg_remember" name="lg_remember">
							<label for="lg_remember">Beni Hatırla</label>
						</div>
					</div>
					<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
				</div>
				<div class="etc-login-form">
					<p>Şifreni unuttuysan <a href="index.php?main=forgot">tıkla</a></p>
					<p>Hesabınız yoksa <a href="index.php?main=register">üye olun</a></p>
				</div>
			</form>
		</div>
		<!-- end:Main Form -->
	</div>
<?php } ?> 