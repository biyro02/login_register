<?php
	function show_message($mesaj_no = null)
	{ 
		$mesaj = 
		[
			0 => '',
			1 => "Lütfen bilgilerinizi kontrol ediniz.",
			2 => 'Oturumunuz kapatılmıştır.',
			4 => "Girdiğiniz bilgilere ulaşılamadı. 
				Şifrenizi veya kullanıcı adınızı unuttuysanız 
				<a href='index.php?main=forgot'>buraya</a>, 
				üyelik yapmadığınızı düşünüyorsanız 
				<a href='index.php?main=register'>buraya</a> tıklayın.",
			5 => "Lütfen şifrenizi giriniz!",
			6 => "Lütfen Kullanıcı adınızı giriniz!",
			7 => "Üyelik sözleşmesini onaylamadığınız için kayıt gerçekleşmemiştir.",
			8 => "Girmiş olduğunuz şifreler birbirini tutmuyor.",
			9 => "Lütfen zorunlu alanları doldurun.",
			10=> "Üyelik kayıt işleminiz başarısız olmuştur. Lütfen daha sonra tekrar deneyiniz.",
			11=> "Üyelik işleminiz başarıyla tamamlanmıştır. Lütfen oturum açınız."
		];
		if($mesaj_no==null || !isset($mesaj[$mesaj_no])){
			$mesaj_no = 0;
		}
		return $mesaj[$mesaj_no];
	}
?>