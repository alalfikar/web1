<?php
  require_once("conn_koneksi.php");
  if (isset($_POST['submit'])) {    
    $sql = $conn->prepare("UPDATE tbl_mahasiswa SET namamhs=? , alamatmhs=? , teleponmhs=? , jurusanmhs=? WHERE nimmhs=?");
    $namamhs=$_POST['namamhs'];
    $alamatmhs = $_POST['alamatmhs'];
    $teleponmhs= $_POST['teleponmhs'];
    $jurusanmhs= $_POST['jurusanmhs'];
    $sql->bind_param("sssss",$namamhs, $alamatmhs, $teleponmhs, $jurusanmhs,$_GET["nimmhs"]); 
    if($sql->execute()) {
      $success_message = "Update Data Berhasil";
    } else {
      $error_message = "Ada masalah update data";
    }

  }
  $sql = $conn->prepare("SELECT * FROM tbl_mahasiswa WHERE nimmhs=?");
  $sql->bind_param("s",$_GET["nimmhs"]);      
  $sql->execute();
  $result = $sql->get_result();
  if ($result->num_rows > 0) {    
    $row = $result->fetch_assoc();
  }
  $conn->close();
?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
.tbl-qa{border-spacing:0px;border-radius:4px;border:#6ab5b9 1px solid;}
</style>
<title>JavanetMedia - Edit Mahasiswa </title>
</head>
<body>
<?php if(!empty($success_message)) { ?>
<div class="success message"><?php echo $success_message; ?></div>
<?php } if(!empty($error_message)) { ?>
<div class="error message"><?php echo $error_message; ?></div>
<?php } ?>
<form name="frmUser" method="post" action="">
<div class="button_link"><a href="index.php" > List Mahasiswa </a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tbl-qa">
  <thead>
    <tr>
      <th colspan="2" class="table-header">Edit Data Mahasiswa</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-row">
      <td><label>Nama</label></td>
      <td><input type="text" name="namamhs" class="txtField" value="<?php echo $row["namamhs"]?>"></td>
    </tr>
    <tr class="table-row">
      <td><label>Alamat</label></td>
      <td><input type="text" name="alamatmhs" class="txtField" value="<?php echo $row["alamatmhs"]?>"></td>
    </tr>
    <tr class="table-row">
      <td><label>Telepon</label></td>
      <td><input type="text" name="teleponmhs" class="txtField" value="<?php echo $row["teleponmhs"]?>"></td>
    </tr>
    <tr class="table-row">
      <td><label>Jurusan</label></td>
      <td><input type="text" name="jurusanmhs" class="txtField" value="<?php echo $row["jurusanmhs"]?>"></td>
    </tr>
    <tr class="table-row">
      <td colspan="2"><input type="submit"  name="submit" value="Submit" class="demo-form-submit"></td>
    </tr>
  </tbody>  
</table>
</form>
</body>
</html>