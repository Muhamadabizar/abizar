<?php
    include './../koneksi.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insert = mysqli_query($koneksi, "INSERT INTO registrasi(`nama`,`email`,`password`) 
                                        VALUES('$name','$email','$password')");

    if($insert) {
        // echo "Sukses Insert Data";
        echo "<script type='text/javascript'>Sukses Registrasi</script>";
        header("Location: http://localhost/abizar"); 
    } else {
        echo "Gagal Insert Data";
    }
?>