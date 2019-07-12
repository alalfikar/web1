<!DOCTYPE html>
<html>
 <head>
<title></title>
 

 <body>
 <header>
 </header> 
<content>
    <h1>Tampil Data</h1>
    <h2><a href ="home.php">Kembali</a></h2>
    <div class="content">
<?php 
require_once("koneksi.php");


$sql = 'SELECT siswa.nis, siswa.nama, kelas.nama_kelas, nilai3.nama_mapel, nilai3.nilai_in, IF(nilai_in>70, "Lulus","Tidak Lulus") Status 
FROM siswa
JOIN nilai3 ON siswa.nis=nilai3.nis
JOIN kelas ON siswa.kode_kelas=kelas.kode_kelas 
Order by nis ASC ';

    
$query = mysqli_query($conn, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}

echo '<table>
    <thead>
      <tr>
       <th>NIS</th>
        <Th></  th>
        <th>Nama siswa</th>
        <Th></th>
        <th>Kelas</th>
        <th></TH>
        <th>Mata pelajaran</th>
          <th></TH>
        <th>Nilai</th>
        <th></th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>';
    
while ($row = mysqli_fetch_array($query))
{
  
  echo '<tr>
      <td>'.$row['nis'].'</td>
      <td></td>
      <td>'.$row['nama'].'</td>
      <td></td>
      <td>'.$row['nama_kelas'].'</td>
       <td></td>
      <td>'.$row['nama_mapel'].'</td>
      <td></td>
      <td>'.$row['nilai_in'].'</td>
      <td></td>
      <td>'.$row['Status'].'</td>
    </tr>';
}
echo '
  </tbody>
</table>';


mysqli_free_result($query);


mysqli_close($conn);
?>
</content>
</html>