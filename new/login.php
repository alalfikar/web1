<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Welcome! Please Sign In</title>
      <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<form method="post" action="">

				<div class="group">
					<label for="user" class="label">Username</label>
					<input type="text" name="username" class="input" placeholder="Your Username" maxlength="8">
				</div>

				<div class="group">
					<label for="pass" class="label">Password</label>
					<input type="password" name="password" class="input" placeholder="Your Password" maxlength="8">
				</div>

				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>

				<div class="group">
					<input type="submit" name="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="sign.php">Not a Member?
				</div></a>
				<?php
		include 'conn/Koneksi.php';

		if (isset($_POST['submit'])) {
			$username = $koneksi->getPost('username');
			$password = $koneksi->getPost('password');
			$q = $koneksi->getSelect("user where username = '$username' and password ='$password'");
			$a = $koneksi->getNur($q);

			if ($a == 1) {
				session_start();
				$_SESSION['username'] = $username;
				$koneksi->getAlert('Selamat datang $user');
				$koneksi->getRedirect('homeuser.php');
			} else {
				$koneksi->getAlert('Masukkan username dan password dengan benar');
			}
		}
	?>
			</div></form>


		</div>
	</div>
</div>
  
  

</body>

</html>
