<?php include 'conn/koneksi.php'; ?>
<!DOCTYPE html>
<html>
 <head>
<title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="dmo4.css" />
  <script src="jquery.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/twd_slideshow.js"></script>
  <link rel="stylesheet" href="css/slide.css">
 <style type="text/css">

 </style>
 </head>
 <body>
 <header>
 <div class="header-banner">
 <a href="home.php" class="logo"></a>
 <!--
 <h1>Art in Finland</h1>
 -->
 </div>
 <div class="clear"></div>
<nav>
    <a href="#" class="demo-4">
      <span>
        <span>Login</span>
        <span>Sign</span>
        <span></span>
      </span>
    </a>
 
    <a href="#" class="demo-4">
      <span>
        <span>Genre</span>
        <span>Manga</span>
        <span></span>
      </span>
    </a>
 
    <a href="#" class="demo-4">
      <span>
        <span>Charackter</span>
        <span>Manga</span>
        <span></span>
      </span>
    </a>
 
    <a href="#" class="demo-4">
      <span>
        <span>List</span>
        <span>Manga</span>
        <span></span>
      </span>
    </a>
 
  </nav>
 </header> 
 <div class="container">
<div class="header">
    <h1>Tambah Data</h1>
     <a href="crud.php" >Kembali</a>
    <div id="content">
    
    <form action="" method="post" enctype="multipart/form-data">
    
      <input type="text" name="judul" placeholder="Masukan judul manga" / ><br><br>
      <input type="file" name="cover"/ ><br><br>
      <input type="text" name="genre" placeholder="Masukan genre manga"/ ><br><br>
      <input type="text" name="d" placeholder="Masukan deskripsi manga"/ ><br><br>
     <input type="submit" name="simpan" value="Simpan Manga" / ><br><br></a>
    </form>
    <?php
    if(isset($_POST['simpan'])){
      $folder = 'manga/artworks/';
      $name_m = $_FILES['cover']['name'];
      $rename = date('Hs').$name_m;
      $sumber_m = $_FILES['cover']['tmp_name'];
      move_uploaded_file($sumber_m, $folder.$rename);
      $insert = mysqli_query($conn, "INSERT INTO addmanga VALUES (NULL,'".$_POST['judul']."','".$rename."',
      '".$_POST['genre']."','".$_POST['d']."',NULL)");
      if($insert){
        echo 'Data berhasil disimpan';
      }else{
        echo 'Gagal disimpan';
      }
    }
    ?>

  </div>
  </div> <!--/ .header -->

  

  <div class="footer">
    <h4>Created by</h4>
    <p>Copyright &copy; 2018 Acselax Kazz</a></p>
  </div> <!--/ .footer -->
 </div>
 <script type="text/javascript">
  $(window).scroll(function(){
  if ($(window).scrollTop() >= 300) {
   $('nav').addClass('fixed-header');
  }
  else {
   $('nav').removeClass('fixed-header');
  }
 });
 </script>
 
 </body>
</html>