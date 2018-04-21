<?php
    $host = 'localhost';
    $username = 'root'; // username untuk database
    $password = ''; // password untuk database
    $database = 'primakara'; // nama database yang ingin digunakan

    $connect = mysqli_connect($host, $username, $password, $database); // cara mengkoneksikan database

    $nimTerpilih = $_GET['nim'];
    $kodeSelectDataTerpilih = 
            "SELECT * FROM mahasiswa WHERE nim = '$nimTerpilih'";

    $tampilDataTerpilih = 
            mysqli_query($connect, $kodeSelectDataTerpilih);

    $dataTerpilih = mysqli_fetch_array($tampilDataTerpilih);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Update Data</title>
    </head>
    <body>
        <table border="1">
            <form action="proses_update_mahasiswa.php?nim=<?php echo $dataTerpilih['nim']; ?>" method="POST">
                <tr>
                    <td>NIM</td>
                    <td>Nama</td>
                    <td>Jurusan</td>
                    <td>Aksi</td>
                </tr>
                <tr>
                    <td><input type="text" name="nim" value="<?php echo $dataTerpilih['nim']; ?>"></td>
                    <td><input type="text" name="nama" value="<?php echo $dataTerpilih['nama']; ?>"></td>
                    <td><input type="text" name="jurusan" value="<?php echo $dataTerpilih['jurusan']; ?>"></td>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </form>
        </table>
    </body>
</html>