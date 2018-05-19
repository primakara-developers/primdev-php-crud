<?php 
    $host = 'localhost';
    $username = 'root'; // username untuk database
    $password = ''; // password untuk database
    $database = 'primakara'; // nama database yang ingin digunakan

    $connect = mysqli_connect($host, $username, $password, $database); // cara mengkoneksikan database

    $nim = $_GET['nim'];

    $execute = "DELETE FROM mahasiswa WHERE nim = $nim";

    $executeCode = mysqli_query($connect, $execute);

    if ($executeCode) {
        header('location:baca_mahasiswa.php');
    } else {
        echo "Gagal";
    }
?>