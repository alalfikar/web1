

        <body bgcolor="#CCCCCC">

        <h2>

        <p align="center">EDIT DATA

        <?php

         include('koneksi2.php');

         if(isset($_GET['nis'])){

          $nis  = $_GET['nis'];

          $query = mysqli_query($db_link,'select * from siswa where nis = "'.$nis.'"');

          $data   = mysqli_fetch_array($query);

          $nama_mapel = $data['nama_mapel'];

          $nilai_in = $data['nilai_in'];

         }

         else{

         $nama_mapel = '';

         $nama_mapel = '';

         }

        ?>

        </p></h2>

        <form method="post" name="frm" action="aksi.php">

        <table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">

          <!--DWLayoutTable-->

          <tr>

            <td width="189" height="20"> </td>

            <td width="26"> </td>

            <td width="331"> </td>

          </tr>

          <tr>

            <td height="27" align="right" valign="middle">no</td>

            <td align="center" valign="top">:</td>

            <td valign="middle">

              <input type="text" name="no" value="<?php echo $_GET['no']; ?>" readonly="readonly"> 

            </td>

          </tr>

          <tr>

            <td height="27" align="right" valign="middle">Nama</td>

            <td align="center" valign="top">:</td>

            <td valign="middle"><label>

              <input type="text" name="nama" value="<?php echo $nama; ?>">

            </label></td>

          </tr>

          <tr>

            <td height="27" align="right" valign="middle">Alamat</td>

            <td align="center" valign="top">:</td>

            <td valign="middle"><label>

              <input name="alamat" type="text" size="50" value="<?php echo $alamat; ?>">

            </label></td>

          </tr>

          <tr>

            <td height="42"> </td>

            <td> </td>

            <td><input type="submit" name="tedit" value="EDIT"></td>

          </tr>

        </table>

        </form>

