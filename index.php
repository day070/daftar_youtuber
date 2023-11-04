<?php
require("session.php");
require("koneksi.php");
$result = mysqli_query($con, "SELECT * FROM profil ");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>

<body>
    <nav>
        <div class="con-nav"></div>
        <div class="logo">
            <img src="image/1.jpg" width="40px" style="border-radius:50%;">
        </div>
        <ul class="ul-nav">
            <li class="li-nav"><a href="#">Beranda</a></li>
            <li class="li-nav"><a href="#">Daftar</a></li>
            <li class="li-nav"><a href="#">Support</a></li>
            <li class="li-nav"><a href="logout.php">Logout</a></li>
        </ul>
        <div class="kanan">
            <a href=""><i class="fa-regular fa-user" style="color: white;"></i></a>
            <a href=""><i class="fa-solid fa-earth-americas" style="color: white;"></i></a>
        </div>
    </nav>
    <div class="slides">
        <div class="slide">
            <img src="image/1.jpg" alt="">
        </div>

        <div class="slide">
            <img src="image/2.jpg" alt="">
        </div>

        <div class="slide">
            <img src="image/3.jpg" alt="">
        </div>
        <div class="navigation">
            <a class="prev" onclick="minesSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>

    <table border="1" style="border-collapse: collapse;" width="100%">
        <tr>
            <th>Nama</th>
            <th>Negara</th>
            <th>Konten</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['Nama'] . "</td>";
            echo "<td>" . $row['Negara'] . "</td>";
            echo "<td>" . $row['J_konten'] . "</td>";
            echo "<td>" . "<a href='edit.php?id=$row[id_youtuber]'>Edit/</a><a href='delete.php?id=$row[id_youtuber]'>Hapus</a>" . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <a href="tambah.php">Tambah Data</a>
    <script src="fontawesome/js/all.min.js"></script>
    <script src="script.js"></script>
</body>

</html>