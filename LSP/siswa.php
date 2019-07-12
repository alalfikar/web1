

        <?php

        include('koneksi2.php'); 

        ?>

        <html>

        <head>

        <title>Daftar Siswa</title>

        </head>


        <body bgcolor="#CCCCCC">

        <?php

        $sql = 'SELECT siswa.nis, siswa.nama, kelas.nama_kelas, nilai3.nama_mapel, nilai3.nilai_in, IF(nilai_in>70, "Lulus","Tidak Lulus") Status 
FROM siswa
JOIN nilai3 ON siswa.nis=nilai3.nis
JOIN kelas ON siswa.kode_kelas=kelas.kode_kelas 
Order by nis ASC ';

        $query = mysqli_query($db_link,$sql);

        ?>

        <h2><strong><p align="center">Data Siswa</p></strong></h2>

        <table width="807" border="1" cellpadding="0" cellspacing="0" align="center">

          <!--DWLayoutTable-->

          <tr>

            <td width="112" height="29" align="center" valign="middle" bgcolor="#00FFFF">No</td>

            <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Nama</td>

            <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Nama Kelas</td>
                    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Nama Mapel</td>
                            <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Nilai</td>

            <td width="133" align="center" valign="middle" bgcolor="#00FFFF"><a href="tambah.php">TAMBAH</a></td></tr>

        <?php

         while($data = mysqli_fetch_array($query)){ 

        ?>

         <tr>

            <td p align="center" bgcolor="#FFFFFF"><?php echo $data['nis']; ?></td>

            <td p align="center" bgcolor="#FFFFFF"><?php echo $data['nama']; ?></td>

            <td p align="center" bgcolor="#FFFFFF"><?php echo $data['nama_kelas']; ?></td>
            <td p align="center" bgcolor="#FFFFFF"><?php echo $data['nama_mapel']; ?></td>
            <td p align="center" bgcolor="#FFFFFF"><?php echo $data['nilai_in']; ?></td>

            <td p align="center" bgcolor="#FFFFFF">

         <a href="edit.php?nis=<?php echo $data['nis'];?>" title="Edit siswa"> || ubah || </a>

         <a href="delete.php?nis=<?php echo $data['nis'];?>" onclick="return confirm('Yakin ingin menghapus?');">|| hapus ||</a>

         </td>

          </tr

        <?php

        }

        ?>

        </table>

        </body>

        </html>

