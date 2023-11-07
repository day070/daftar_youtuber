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
    <div class="container">
        <div class="card-body">
            <div class="card">
                <img id="img1" src="image/" alt="" />
                <img id="img2" src="" alt="" />
                <div class="content">
                    <h2 id="h2">Dr. Strange</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Perferendis quasi aliquid voluptatibus recusandae dolorum hic,
                        nisi ducimus voluptatem quis cupiditate libero accusantium iusto
                        tempore voluptatum eum quia ipsa, eius impedit rem neque
                        asperiores officiis sapiente?
                    </p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="card">
                <img id="img1" src="Images/dr. strange.png" alt="" />
                <img id="img2" src="Images/dr. strange 2.png" alt="" />
                <div class="content">
                    <h2 id="h2">Dr. Strange</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Perferendis quasi aliquid voluptatibus recusandae dolorum hic,
                        nisi ducimus voluptatem quis cupiditate libero accusantium iusto
                        tempore voluptatum eum quia ipsa, eius impedit rem neque
                        asperiores officiis sapiente?
                    </p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="card">
                <img id="img1" src="Images/dr. strange.png" alt="" />
                <img id="img2" src="Images/dr. strange 2.png" alt="" />
                <div class="content">
                    <h2 id="h2">Dr. Strange</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Perferendis quasi aliquid voluptatibus recusandae dolorum hic,
                        nisi ducimus voluptatem quis cupiditate libero accusantium iusto
                        tempore voluptatum eum quia ipsa, eius impedit rem neque
                        asperiores officiis sapiente?
                    </p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="card">
                <img id="img1" src="Images/dr. strange.png" alt="" />
                <img id="img2" src="Images/dr. strange 2.png" alt="" />
                <div class="content">
                    <h2 id="h2">Dr. Strange</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Perferendis quasi aliquid voluptatibus recusandae dolorum hic,
                        nisi ducimus voluptatem quis cupiditate libero accusantium iusto
                        tempore voluptatum eum quia ipsa, eius impedit rem neque
                        asperiores officiis sapiente?
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="fontawesome/js/all.min.js"></script>
    <script src="script.js"></script>
</body>

</html>