
<?php include '../conn/koneksi.php'; ?>
<?php
  

  session_start();
  $username = $koneksi->getSession('username');
  if ($username == "") {
    $koneksi->getAlert('Anda Harus Login Dulu Sebelum Mengakses Halaman Ini');
    $koneksi->getRedirect('../login.php');
  }
?>
<header>
 <div class="header-banner">
 <a href="../home.php" class="logo"></a>
 <!--
 <h1>Art in Finland</h1>
 -->
 </div>
 <div class="clear"></div>
<nav>
    <a href="../logout.php" class="demo-4">
      <span>
        <span>Hi! <?=$_SESSION['username'];?></span>
        <span>Sign Out</span>
        <span></span>
      </span>
    </a>
 
    <a href="../list.php" class="demo-4">
      <span>
        <span>Genre</span>
        <span>Manga</span>
        <span></span>
      </span>
    </a>
 
    <a href="../char.php" class="demo-4">
      <span>
        <span>Charackter</span>
        <span>Manga</span>
        <span></span>
      </span>
    </a>
 
    <a href="../list.php" class="demo-4">
      <span>
        <span>List</span>
        <span>Manga</span>
        <span></span>
      </span>
    </a>
 
  </nav>
 </header>