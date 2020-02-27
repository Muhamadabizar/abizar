<?php
    include './../koneksi.php';
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = mysqli_query($koneksi, "SELECT * FROM `registrasi` WHERE `email` = '$email' AND `password`='$password'");
    $data = mysqli_num_rows($sql);

    if($data > 0) {
        $row = $sql->fetch_array();
        $_SESSION['id'] = $row['id'];
        header("Location: http://localhost/abizar"); 
    } else {
        echo "Salah Password / Email";
        header("Location: http://localhost/abizar");
    }

    if (!$sql) {
        printf("Error: %s\n", mysqli_error($koneksi));
        exit();
    }
?>