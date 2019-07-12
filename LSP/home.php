<?php include 'koneksi.php';?>
<?php
	define('LOG', 'Log.txt');
	function write_log($log){
		$time = @date('[Y-d-m:H:i:s]');
		$op = $time.' '.'Action For '.$log."\n".PHP_EOL;
		$fp = @fopen(LOG, 'a');
		$write = @fwrite($fp, $op);
		@fclose($fp);
	}

write_log("login user");
?>
<!DOCTYPE html>
<html>
<head>

	
	<title>Entri Data Nilai Siswa</title>
</head>
<body>

	 <H1>Pemasukan nilai siswa</H1>	
<?php
  

  session_start();
  $username = $koneksi->getSession('username');
  if ($username == "") {
    $koneksi->getAlert('Anda Harus Login Dulu Sebelum Mengakses Halaman Ini');
    $koneksi->getRedirect('login.php');
  }
?>
	 <h2>Hi! <?=$_SESSION['username'];?></h2>
	  <a href="logout.php">Log out</a>
	<CONTENT>
		<h3>Menu</h3>
		View Data
		<ul>
			<a href="tampilsiswa.php">
			View data nilai semua siswa</a>

		</ul>
		<ul>
			<a href="tambahdata.php">
			Input Nilai Siswa</a>
		</ul>
		<ul>
			<a href="tampildata2.php">
			View data nilai semua siswa</a>
		</ul>
		
	</CONTENT>


</body>
</html>