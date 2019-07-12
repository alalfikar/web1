

        <?php

        include('koneksi2.php');

        $nilai_in = $_GET['nilai_in'];


        $sql  = 'delete from nilai3 where nilai_in="'.$nilai_in.'"';

        $query = mysqli_query($db_link,$sql);

        header('location: siswa.php');

        ?>

