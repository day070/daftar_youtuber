<?php
require("koneksi.php");
$result = mysqli_query($con, "SELECT * FROM profil LIMIT 3");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav>
        <div class="con-nav"></div>
        <div class="logo">
            <img src="image/hero-login.png" width="40px" style="border-radius:50%;margin-top:10px;">
        </div>
        <ul class="ul-nav">
            <li class="li-nav"><a href="#">Beranda</a></li>
            <li class="li-nav"><a href="daftar.php">Daftar</a></li>
            <li class="li-nav"><a href="#">Support</a></li>
        </ul>
        <div class="kanan">
            <a href="admin/index.php">Admin</a>
            <a href=""><i class="fa-solid fa-earth-americas" style="color: white;"></i></a>
        </div>
    </nav>

    <div class="banner">
        <img src="image/yt-bg.jpg" alt="">
    </div>
    <div class="slides">
        <h2>Trending Now</h2>


        <div class="slide">
            <img src="image/bn-2.png" alt="">
        </div>
        <div class="slide">
            <img src="image/desktop - 2.png" alt="">
        </div>
        <div class="slide">
            <img src="image/bn-3.png" alt="">
        </div>
        <div class="navigation">
            <a class="prev" onclick="minesSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>


    <div class="kontainer">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="kartu-body" id="daftar">
                <div class="kartu">
                    <img id="img1" src="image/<?php echo $row['foto'] ?>" alt="" />
                    <img id="img2" src="" alt="" />
                    <div class="kontent">
                        <h2 id="h2">
                            <?php echo $row['Nama'] ?>
                        </h2>
                        <h4>
                            <?php echo $row['kasus'] ?>
                        </h4>

                        <p class="kartu-text">
                            <?php echo $row['Deskripsi'] ?>
                        </p>
                        <?php
                        echo "<button class='btn-see'><a href='info_youtuber.php?id=$row[id_youtuber]'>Seemore</a></button>"
                            ?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>

    </div>

    <script src="fontawesome/js/all.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
