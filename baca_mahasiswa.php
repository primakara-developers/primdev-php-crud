<?php
    $host = 'localhost';
    $username = 'root'; // username untuk database
    $password = ''; // password untuk database
    $database = 'primakara'; // nama database yang ingin digunakan

    $connect = mysqli_connect($host, $username, $password, $database); // cara mengkoneksikan database

    $kodeSelect = "SELECT * FROM mahasiswa";

    $tampilData = mysqli_query($connect, $kodeSelect);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihat Data</title>
</head>
<body>
    <table border="1" style="border-collapse: collapse">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while($data = mysqli_fetch_array($tampilData)) { ?>
                <tr>
                    <td><?php echo $data['nim']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['jurusan']; ?></td>
                    <td>
                        <a href="update_mahasiswa.php?nim=<?php echo $data['nim']; ?>">Update</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="index.php">Input Data</a>
</body>
</html>