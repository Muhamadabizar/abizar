<?php
    include "./koneksi.php";
    session_start();
?>

<html>
    <head>
        <title>Abizar Apps</title>
    <head>

    <body>
        <?php
            if(isset($_SESSION['id'])){
                include "./Dashboard/Dashboard.php";
            } else {
                include "./Login/login.html";
                echo "Belum Punya Akun? <a href=Registrasi/registrasi.html>Daftar!</a>";
            }
        ?>
    </body>

</html>