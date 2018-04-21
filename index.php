<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <table border="1">
            <form action="input_mahasiswa.php" method="POST">
                <tr>
                    <td>NIM</td>
                    <td>Nama</td>
                    <td>Jurusan</td>
                    <td>Aksi</td>
                </tr>
                <tr>
                    <td><input type="text" name="nim"></td>
                    <td><input type="text" name="nama"></td>
                    <td><input type="text" name="jurusan"></td>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </form>
        </table>
        <a href="baca_mahasiswa.php">Lihat Data</a>
    </body>
</html>