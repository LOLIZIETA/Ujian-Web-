<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "crud_ujian web";

    $conn = mysqli_connect($host, $user, $password, $database);

    if (!$conn) {
        die("Koneksi Gagal: " . mysqli_connect_error());
    }
?>
