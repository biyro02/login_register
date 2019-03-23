	<div class="container">
		<div class="jumbotron">
			<?php if(show_message($mesaj_no)!='') {
				echo "<p>".show_message($mesaj_no)."</p>";
			} ?>
			<a href="index.php?main=login">Oturum Aç</a>
			<a href="index.php?main=forgot">Şifremi Unuttum</a>
			<a href="index.php?main=register">Üye Ol</a>
			<br>
			<img src="img/main.png" />
		</div>
	</div>