<?php
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $nilai = $_POST['nilai'];

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Form Ditempat</title>
</head>

<body>
    <center>
        <h1>Program Data Mahasiswa dengan Metode POST</h1>
    </center>
    <form method="POST" action="form_post_ditempat.php">
        <table width="350" border="1" align="center" bordercolor="#0000FF">
            <tr>
                <td><strong>NIM</strong></td>
                <td><input name="nim" type="text" id="nim" /></td>
            </tr>
            <tr>
                <td><strong>Nama Mahasiswa</strong></td>
                <td><input name="nama" type="text" id="nama" /></td>
            </tr>
            <tr>
                <td><strong>jurusan</strong></td>
                <td><input name="jurusan" type="text" id="jurusan" /></td>
            </tr>
            <tr>
                <td><strong>Nilai</strong></td>
                <td><input name="nilai" type="text" id="nilai" /></td>
            </tr>
        </table>

        <center><input type="submit" name="submit" value="Tampil" /></center>
    </form>

    <div <?= (!isset($_POST['submit'])) ? 'hidden' : ''; ?>>
        <ul>
            <li>NIM :<?= $nim ?></li>
            <li>Nama : <?= $nama ?></li>
            <li>jurusan : <?= $jurusan ?></li>
            <li>Nilai : <?= $nilai ?></li>
        </ul>
    </div>
</body>

</html>