<?php
require("../session.php")
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <a href="index.php">Kembali</a><br><br>
    <form action="tambah.php" method="post" name="form1">
        <table width="25%">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td> Asal Negara</td>
                <td><input type="text" name="Negara"></td>
            </tr>
            <tr>
                <td>J_konten</td>
                <td><input type="text" name="J-knt"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Tambah"></td>
            </tr>
        </table>

    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $Negara = $_POST['Negara'];
        $j_knt = $_POST['J-knt'];

        include_once('../koneksi.php');

        $result = mysqli_query($con, "INSERT INTO profil (Nama,Negara,J_konten) VALUES('$nama','$Negara','$j_knt')");
        header("location:index.php");
    }

    ?>
</body>

</html>