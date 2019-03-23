
		<!-- REGISTRATION FORM -->
		<div class="text-center" style="padding:50px 0">
			<div class="logo">register</div>
			<!-- Main Form -->
			<div class="login-form-1">
				<form id="register-form" class="text-left" action="login/main/register.php" method="post">
					<div class="login-form-main-message">
						<?php if(show_message($mesaj_no)!=''){
						echo "<p>".show_message($mesaj_no)."</p>";
					} ?>
					</div>
					<div class="main-login-form">
						<div class="login-group">
							<div class="form-group">
								<label for="reg_username" class="sr-only">Email address</label>
								<input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="username">
							</div>
							<div class="form-group">
								<label for="reg_password" class="sr-only">Password</label>
								<input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
							</div>
							<div class="form-group">
								<label for="reg_password_confirm" class="sr-only">Password Confirm</label>
								<input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="confirm password">
							</div>
							
							<div class="form-group">
								<label for="reg_email" class="sr-only">Email</label>
								<input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="email">
							</div>
							<div class="form-group">
								<label for="reg_fullname" class="sr-only">Full Name</label>
								<input type="text" class="form-control" id="reg_fullname" name="reg_fullname" placeholder="full name">
							</div>
							<div class="form-group">
								<label for="reg_birthdate" class="sr-only">Birthdate</label>
								<input type="date" class="form-control" id="reg_birthdate" name="reg_birthdate" placeholder="">
							</div>
							
							<div class="form-group login-group-checkbox">
								<input type="checkbox" class="" id="reg_agree" name="reg_agree">
								<label for="reg_agree">i agree with <a href="#">terms</a></label>
							</div>
						</div>
						<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
					</div>
					<div class="etc-login-form">
						<p>Hesabınız varsa <a href="index.php?main=login">oturum açın</a></p>
					</div>
				</form>
			</div>
			<!-- end:Main Form -->
		</div>
