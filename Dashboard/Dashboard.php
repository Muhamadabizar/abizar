<?php
    include './koneksi.php';

    $sql = mysqli_query($koneksi, "SELECT `nama_buah` FROM `buah`");
    $data = mysqli_num_rows($sql);
?>

<html>
    <head>
        <title> Nama Buah </title>
    </head>

    <body>
        <?php
            while($row = $sql->fetch_array()){
        ?>
                <b>
                    <?php 
                        echo $row['nama_buah'] 
                    ?> 
                </b> 
                <br>
        <?php
            }
        ?>  

        <br>
        <br>
        <br>
        <a href="ChangePassword/change-password.html">Change Password</a>
        <br>
        <a href="./logout.php">Logout</a>
    </body>
</html>