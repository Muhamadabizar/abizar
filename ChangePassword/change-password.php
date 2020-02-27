<?php
    session_start();
    include './../koneksi.php';

    $password = $_POST['password'];

    $id = $_SESSION['id'];
    $update = mysqli_query($koneksi, "UPDATE `registrasi` SET `password` = $password WHERE `id`=$id ");

    if($update) {
        echo "Sukses Update Data"; 
    } else {
        echo "Gagal Update Data";
        echo "Error updating record: " . mysqli_error($koneksi);
    }
?>
<html>

<head>
    <title>Change Password</title>
</head>

<body>
    <a href="/Abizar"> OK </a>
</body>

</html>