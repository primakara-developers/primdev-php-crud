<?php
    $host = 'localhost';
    $username = 'root'; // username untuk database
    $password = ''; // password untuk database
    $database = 'primakara'; // nama database yang ingin digunakan

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    $connect = mysqli_connect($host, $username, $password, $database); // cara mengkoneksikan database

    $kode_insert = "INSERT INTO mahasiswa(nim, nama, jurusan) values( '$nim', '$nama', '$jurusan')";

    $execute = mysqli_query($connect, $kode_insert);

    if($execute) {
        echo "Berhasil";
    } else {
        echo "Gagal";
    }
?>