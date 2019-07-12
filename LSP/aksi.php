     <?php

    include('koneksi.php');

    if(isset($_POST['ttambah'])){ //['ttambah'] merupakan name dari button di form tambah

     $no = $_POST['no'];

     $nama = $_POST['nama'];

     $alamat = $_POST['alamat'];

     

     $sql = 'insert into daftar_siswa (no,nama,alamat) values ("'.$no.'","'.$nama.'","'.$alamat.'")';

     $query = mysqli_query($db_link,$sql);

     

     if($query){

      header('location: siswa.php'); //kode ini otomatis mengarahkan menuju tabel data siswa

     }

     else{

      echo 'Gagal';

     }

    }

    //dibawah ini adalah fungsi edit

    if(isset($_POST['tedit'])){

            $no     = $_POST['no'];

     $nama = $_POST['nama'];

     $alamat = $_POST['alamat'];

     

     $sql = 'update daftar_siswa set nama="'.$nama.'", alamat="'.$alamat.'" where no="'.$no.'"';

     $query = mysqli_query($db_link,$sql);

     

     if($query){

      header('location: siswa.php');

     }

     else{

      echo 'Gagal';

     }

    }

    ?>