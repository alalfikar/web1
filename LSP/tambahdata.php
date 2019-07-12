
<!DOCTYPE html>

<html>
<head>
  <title>Halaman Tambah Data</title>
</head>
<body>
<h1>Tambah Data</h1>
     <a href="home.php" >Kembali</a>
    <div id="content">
    
    <form action="" method="post" enctype="multipart/form-data">
    
      <input type="text" name="nis" placeholder="Masukan nis" / ><br><br>
      <input type="text" name="kode_kelas" placeholder="Masukan Kode_kelas" /><br><br>
       <input type="text" name="nama_mapel" placeholder="Masukan mapel"/ ><br><br>
        <input type="text" name="nilai_in" placeholder="Masukan nilai"/ ><br><br>
         <input type="submit" name="simpan" value="Simpan Data" / ><br><br></a>
    </form>
    <?php include 'koneksi.php';
    if(isset($_POST['simpan'])){
      $insert = mysqli_query($conn, "INSERT INTO nilai3(nis, kode_kelas, nama_mapel, nilai_in) VALUES ('".$_POST['nis']."','".$_POST['kode_kelas']."','".$_POST['nama_mapel']."','".$_POST['nilai_in']."')");
      if($insert){
        echo 'Data berhasil disimpan';
      }else{
        echo 'Gagal disimpan';
      }
    }
    ?>

</body>
</html>