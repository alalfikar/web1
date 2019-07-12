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
    
  </nav>
 </header> 
 <div class="container">
<div class="header">
    <h1>Tampil Data</h1>
    <div class="content">
<?php 
require_once("conn/koneksi.php");

$sql = "SELECT * FROM addmanga";
$result = $conn->query($sql); 
$conn->close();   
?>
<html>
<head>
  <link href="css/tabel.css" rel="stylesheet" type="text/css" />
  <title>JavanetMedia - CRUD Mahasiswa</title>
</head>
<body>
  <div class="button_link"><a href="input.php">Input Data</a></div>
  <table class="tbl-qa">  
    <thead>
       <tr>
        <th class="table-header" wnimmhsth="20%">Judul</th>
        <th class="table-header" wnimmhsth="20%">Cover</th>
        <th class="table-header" wnimmhsth="20%"> Genre</th>
        <th class="table-header" wnimmhsth="20%"> Deskripsi </th>
        <th class="table-header" wnimmhsth="20%"> Perubahan Terakhir </th>
        <th class="table-header" wnimmhsth="20%" colspan="2">Aksi</th>
        </tr>
    </thead>
    <tbody>   
      <?php
        if ($result->num_rows > 0) {    
          while($row = $result->fetch_assoc()) {
      ?>
      <tr class="table-row" id="row-<?php echo $row["id"]; ?>"> 
        <td class="table-row"><?php echo $row["judul"]; ?></td>
        <td class="table-row"><?php echo $row["cover"]; ?></td>
        <td class="table-row"><?php echo $row["genre"]; ?></td>
        <td class="table-row"><?php echo $row["d"]; ?></td>
        <td class="table-row"><?php echo $row["tanggal_tambah"]; ?></td>
        <!-- action -->
        <td class="table-row" colspan="2"><a href="edit.php?judul=<?php echo $row["judul"]; ?>" class="link"><img title="Edit" src="icon/edit.png"/></a> <a href="hapus.php?judul=<?php echo $row["judul"]; ?>" class="link"><img name="delete" judul="delete" title="Delete" onclick="return confirm('Yakin akan di Hapus?')" src="icon/delete.png"/></a></td>
      </tr>
      <?php
          }
        }
      ?>

    </tbody>
  </table>
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