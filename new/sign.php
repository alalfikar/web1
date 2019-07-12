<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Day 001 Login Form</title>
      <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="login-wrap">
	<div class="login-html">
	
		<input id="tab-1" type="radio" name="tab" class="sign-up"><label for="tab-1" class="tab">Sign Up</label>
		<div class="login-form">
<div class="register">

	
<form action="" method="post">
	<div class="sign-up-htm">

	<div class="group">
		<label for="nama" class="label">Nama Lengkap</label>
		<input type="text" class="input" name="nama_lengkap" required>		
	</div>

	<div class="group">
		<label for="nama" class="label">Username</label>
		<input type="username" class="input" name="username" required maxlength="8">
	</div>

	<div class="group">
		<label for="nama" class="label">Email</label>
		<input type="email" class="input" name="email" required>
	</div>

	<div class="group">
		<label for="nama" class="label">Password</label>
		<input type="password" class="input" name="password" required maxlength="8">
	</div>

	<div class="group">
		<label for="nama" class="label">Konfirmasi Password</label>
		<input type="password" class="input" name="konfirmasi_password" required>
	</div>

	<div class="group">
		<input type="submit" name="register_submit" class="button" value="Sign Up">
	</div>
</form>
<div class="foot-lnk">
					<a href="login.php">Already Member?
				</div></a>
<?php
if(isset($_POST['register_submit'])) {
	
$connect = mysqli_connect('localhost', 'root', '', 'dbartezco') or die(mysqli_connect_error());

$nama_lengkap = mysqli_real_escape_string($connect, trim($_POST['nama_lengkap']));
$username = mysqli_real_escape_string($connect, trim($_POST['username']));
$email = mysqli_real_escape_string($connect, trim($_POST['email']));
$password = mysqli_real_escape_string($connect, trim($_POST['password']));
$konfirmasi = mysqli_real_escape_string($connect, trim($_POST['konfirmasi_password']));

if($password != $konfirmasi) {
	header ('location: login.php?konfirmasipassword-failed');
} else {
	$sql = '
		insert into user
		values(
			"",
			"'.$nama_lengkap.'",
			"'.$username.'",
			"'.$email.'",
			"'.$password.'",
			"'.date('Y-m-d').'"
		)
	';
	mysqli_query($connect, $sql);
	header('location: login.php?register-success');

}
}
?>
<script type="text/javascript">
function validasi_input(form){
  var mincar = 5;
  if (form.password.value.length < mincar){
    alert("Panjang password Minimal 5 Karater!");
    form.password.focus();
    return (false);
  }
   return (true);
}
</script>
</body>
</html>