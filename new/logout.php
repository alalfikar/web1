

        <?php

        session_start();

        unset($_SESSION['username']);

        echo "<script>window.alert('Anda telah keluar dari halaman');

        window.location=('login.php')</script>";

        ?>

