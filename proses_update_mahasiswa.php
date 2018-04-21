<?php
    $host = 'localhost';
    $username = 'root'; // username untuk database
    $password = ''; // password untuk database
    $database = 'primakara'; // nama database yang ingin digunakan

    $nimSaatIni = $_GET['nim'];

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    $connect = mysqli_connect($host, $username, $password, $database); // cara mengkoneksikan database

    $kodeUpdate = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', jurusan = '$jurusan' WHERE nim = '$nimSaatIni'";

    $executeUpdate = mysqli_query($connect, $kodeUpdate);
    if ($executeUpdate) {
        // Jika berhasil langsung pindah ke halaman baca_mahasiswa.php
        header("location:baca_mahasiswa.php");
    } else {
        echo "Gagal";
    }
?>